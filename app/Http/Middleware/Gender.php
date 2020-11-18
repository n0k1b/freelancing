<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Gender
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
            if(auth()->user()->gender == 'female'){
                return $next($request);
            }
        }
        return redirect("browse-blog")->with('error',"This feature only for Female.");
      
    }
}
