<?php

namespace App\Http\Middleware;

use App\Services\FileServiceInterface;
use Closure;
use Illuminate\Http\Request;

class LogRequestMiddleware
{
    protected $fileService;

    public function __construct(FileServiceInterface $fileService)
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
        // Get the current date and time

        // Get the IP address of the client
        $ipAddress = $request->ip();

        // Get the server name
//        $serverName = $request->server('SERVER_NAME');
        $requestPath = $request->path();

        $this->fileService->setLogEntries($ipAddress, $requestPath );
        // Create the log message

        // Continue processing the request
        return $next($request);
    }
}
