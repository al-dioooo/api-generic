<?php

namespace App\Http\Middleware;

use App\Jobs\SendLog;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogAPIs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $ip = $request->ip();
        $timestamp = Carbon::now()->format('Y-m-d H:i:s');
        $uri = $request->getUri();
        $method = $request->getMethod();

        if (count($request->allFiles())) {
            $body = [];

            foreach ($request->allFiles() as $row) {
                $body[] = $row->getClientOriginalName();
            }
        } else {
            $body = $request->all();
        }

        if ($request->getMethod() !== "GET" && $response->status() === 200) {
            $log = [
                'IP' => $ip,
                'TIMESTAMP' => $timestamp,
                'URI' => $uri,
                'METHOD' => $method,
                'REQUEST_BODY' => $body,
                'RESPONSE' => json_decode($response->getContent())
            ];

            Log::channel('api')->info('An API Called', $log);

            SendLog::dispatch('api-log', 'info', 'API Log', $log);
        }

        if ($response->status() !== 200) {
            $log = [
                'IP' => $ip,
                'TIMESTAMP' => $timestamp,
                'URI' => $uri,
                'METHOD' => $method,
                'REQUEST_BODY' => $body,
                'RESPONSE' => json_decode($response->getContent()),
                'STATUS' => $response->status()
            ];

            Log::channel('api')->error('An error occured', $log);

            SendLog::dispatch('api-log', 'error', 'API Log', $log);
        }

        return $response;
    }
}
