<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redirect;
use Closure;

class check
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
  $user_id=session()->get('userid');

               if (empty($user_id)) {

                    return redirect()->guest('/');
        }

        return $response;
    }

}
