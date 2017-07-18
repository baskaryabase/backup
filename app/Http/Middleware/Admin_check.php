<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redirect;
use Closure;

class admin_check
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
       
$response=$next($request);
  $role=session()->get('role');

               if ($role != 'founder' && $role != 'team') {

                   // return redirect()->guest('/');
        }

        return $response;
    }

}
