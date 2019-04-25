<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Expose-Headers: Date');
        $headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, App-Auth-Token, Authorization, Origin, Expires',
        ];
        if ($request->getMethod() == 'OPTIONS') {
            $headers['Cache-Control'] = 'max-age=' . 1728000;
            $headers['Expires'] = Carbon::now()->addDays(20)->toRfc7231String();
            $headers['Content-Length'] = 0;
            return Response::make('OK', 200, $headers);
        }

        $response = $next($request);
        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }
        return $response;
    }
}
