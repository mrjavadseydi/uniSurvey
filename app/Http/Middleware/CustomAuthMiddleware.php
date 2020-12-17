<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CustomAuthMiddleware
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
        if (!session()->has('login_info')||session('login_info')['expire_at']<Carbon::now()) {
            toastr()->warning('زمان قانونی اتصال شما به پایان رسید مجددا وارد شوید!');
            return redirect(url("/"));
        }
        return $next($request);
    }
}
