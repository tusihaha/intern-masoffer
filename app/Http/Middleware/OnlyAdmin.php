<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class OnlyAdmin
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
        if(Auth::user()->role != 'admin' || Auth::user()->status == 'deactivate'){
		return redirect('/nopermit');
	}
	return $next($request);
    }
}
