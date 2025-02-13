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
        $logEntries = $this->fileService->getLogEntries($id, $currentPage, 50, $url);
        $logTitle = $id == 0 ? 'queries' : 'downloads';
        $myIp = $this->fileService->getMyIP();

        return view('dashboard.log', compact('logEntries', 'logTitle', 'myIp'));
    }
}

