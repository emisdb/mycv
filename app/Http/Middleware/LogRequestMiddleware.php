<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogRequestMiddleware
{
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
        $dateTime = now()->format('Y-m-d H:i:s');

        // Get the IP address of the client
        $ipAddress = $request->ip();

        // Get the server name
//        $serverName = $request->server('SERVER_NAME');
        $requestPath = $request->path();

        // Create the log message
        $logMessage = "$dateTime\t$requestPath\t$ipAddress";

        // Log the message to the special log file
        file_put_contents(storage_path('logs/connects.log'), $logMessage . PHP_EOL, FILE_APPEND);

        // Continue processing the request
        return $next($request);
    }
}
