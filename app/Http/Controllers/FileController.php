<?php

// FileController.php
namespace App\Http\Controllers;

use App\Services\FileService;

class FileController extends Controller
{
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function showLog(int $id)
    {
        $currentPage = request()->query('page', 1);
        $url = request()->url();
        if($id == 0){
            $logFilePath = storage_path('logs/connects.log');

        } else {
            $logFilePath = storage_path('logs/download.log');

        }
        $logEntries = $this->fileService->getLogEntries($logFilePath, $currentPage, 50, $url);
        $logtitle = $id == 0 ? 'queries' : 'downloads';

        return view('dashboard.log', compact('logEntries' , 'logtitle'));
    }
}

