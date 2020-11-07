<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
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
        if (auth()->check()) {
            if(auth()->user()->user_role == 'user' && auth()->user()->status == 1){
                return $next($request);
            }
        }
        return redirect("/login")->with('error',"You don't have user access.");
    }
}
