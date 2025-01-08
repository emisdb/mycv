<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class ProjectRepository
{
    public function getItems(array $ids): Collection
    {
        return Project::query()
            ->whereIn('id', $ids)
            ->get();
    }

    public function insert(Project $item): Project
    {
        $item->save();
        return $item;
    }

    public function getAlmostReachedMaxAmountStockItems(): \Illuminate\Support\Collection
    {
        return DB::table('wp_os_products')
            ->select([
                DB::raw('group_concat(distinct(`crm_contracts`.`contract_number`)) as contract_numbers'),
                'crm_contracts.arrangement',
                'crm_contracts.practical_info',
                DB::raw('COUNT(wp_os_order_detail.id) AS orders'),
                'stock_item.maximum_amount',
                DB::raw('(stock_item.maximum_amount - COUNT(wp_os_order_detail.id)) AS difference_stock'),
                'crm_contracts.product_code',
            ])
            ->leftJoin('wp_os_partners', 'wp_os_products.id', '=', 'wp_os_partners.product_id')
            ->leftJoin('crm_contracts', 'wp_os_partners.contract_id', '=', 'crm_contracts.id')
            ->leftJoin('wp_os_order_detail', 'wp_os_partners.id', '=', 'wp_os_order_detail.partner_id')
            ->leftJoin('wp_os_orders', 'wp_os_order_detail.order_id', '=', 'wp_os_orders.id')
            ->leftJoin('stock_item', 'crm_contracts.product_code', '=', 'stock_item.code')
            ->where('wp_os_products.start_date', '<', DB::raw('NOW()'))
            ->where('wp_os_products.end_date', '>', DB::raw('NOW()'))
            ->whereNull('crm_contracts.maximum_amount')
            ->where('stock_item.maximum_amount', '>', 0)
            ->whereIn('wp_os_orders.status', Order::$paidStatuses)
            ->where('wp_os_order_detail.invalid', '=', 0)
            ->whereNotNull('crm_contracts.product_code')
            ->groupBy('stock_item.code')
            ->having('difference_stock', '<=', 10)
            ->get();
    }
}
