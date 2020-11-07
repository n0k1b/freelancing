<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Entrepreneur
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
            if(auth()->user()->user_role == 'entrepreneur' && auth()->user()->status == 2 ){
                return $next($request);
            }
        }

        return redirect("/login")->with('error',"You don't have entrepreneur access.");
    }
}
