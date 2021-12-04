<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        //verifie si user->admin   (admin ==1)
        //if yes, continue jusqua next requête
        //else re-send 403
        if (auth()->user()->admin == 1){
         return $next($request);
        } else {
         abort(403);
        }

    }
}
