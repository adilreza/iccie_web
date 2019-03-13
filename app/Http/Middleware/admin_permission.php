<?php

namespace App\Http\Middleware;

use Closure;

class admin_permission
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
        $result = session('admin_login_status','');
        if($result=='')
        {
            return redirect('/');
        }
        return $next($request);
    }
}
