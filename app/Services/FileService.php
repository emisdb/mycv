<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;

class FileService
{
    const LOG_REQUEST_FILE = 'connects.log';
    const LOG_DOWNLOAD_FILE = 'download.log';

    public function setLogEntries($ipAddress , $requestPath, $is_file = false) : bool
    {
        $dateTime = now();
        $dateTime->modify('+4 hours');
        $dtLog = $dateTime->format('Y-m-d H:i:s');
        $logMessage = "$dtLog\t$requestPath\t$ipAddress";

        // Log the message to the special log file
         return (bool)file_put_contents($this->getFileLog($is_file), $logMessage . PHP_EOL, FILE_APPEND);
    }
   public function getLogEntries($log_id,  $currentPage = 1, $perPage = 50, $url = '') : LengthAwarePaginator
    {
        // Read the log file
        $logEntries = file($this->getFileLog($log_id));

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
    private function getFileLog($is_down)
    {
        if($is_down) {
            return storage_path('logs/' . self::LOG_DOWNLOAD_FILE);
        } else {
            return storage_path('logs/' . self::LOG_REQUEST_FILE);
        }

    }

}
