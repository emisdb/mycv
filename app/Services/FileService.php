<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;

class FileService
{
    public function getLogEntries($logFilePath, $currentPage = 1, $perPage = 50, $url = '') : LengthAwarePaginator
    {
        // Read the log file
        $logEntries = file($logFilePath);

        // Reverse the order of log entries
        $logEntries = array_reverse($logEntries);

        // Paginate the log entries
        $pagedData = array_slice($logEntries, ($currentPage - 1) * $perPage, $perPage);
        $total = count($logEntries);

        // Create a LengthAwarePaginator instance
        $paginator = new LengthAwarePaginator(
            $pagedData,    // Items for the current page
            $total,        // Total number of items
            $perPage,      // Items per page
            $currentPage,  // Current page
            ['path' => $url]  // Additional URL parameters
        );

        return $paginator;
    }

}
