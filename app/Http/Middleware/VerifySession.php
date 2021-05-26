<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class VerifySession
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
        if(Session::has('username')){
            return $next($request);
        }else{
            Session::flash('msg', '**login is required!');
            return redirect()->route('Login.index');
        }
        
    }
}
