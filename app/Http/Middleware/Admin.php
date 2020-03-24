<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    
    public function handle($request, Closure $next)
    {
      if(! auth()->check()){
        return redirect('/account/login');
      }else {
        if(auth()->user()->role == "admin"){
        return $next($request);
          }
          return redirect('/account/login');
      }

    }
}
