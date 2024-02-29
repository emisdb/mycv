<?php

namespace App\Http\Middleware;

use App\Services\FileService;
use Closure;
use Illuminate\Http\Request;

class LogFileDownloadMiddleware
{
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the IP address of the client
        $ipAddress = $request->ip();

        // Get the file path
        $filePath = $request->path(); // Adjust the file path as needed

        $this->fileService->setLogEntries($ipAddress, $filePath, true );

        // Continue processing the request
        return $next($request);
    }
}
