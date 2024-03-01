<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;

interface FileServiceInterface
{
    /**
     * @param int $log_id
     * @param int $currentPage
     * @param int $perPage
     * @param string $url
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getLogEntries($log_id, $currentPage = 1, $perPage = 50, $url = ''): LengthAwarePaginator;

    /**
     * @param string $ipAddress
     * @param string $ipAddress
     * @param bool $requestPath
     * @return bool
     */
    public function setLogEntries($ipAddress, $requestPath, $is_file = false): bool;

}
