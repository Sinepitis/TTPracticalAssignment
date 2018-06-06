<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
		//$role =isset($actions['role']) ? $actions['role'] : null;
		if($role != 0)
		{
			if($request->user() === null)
			{
				 return response("You are not supposed to be in here",401);
			}
			$action = $request->route()->getAction();
			
			$thisUser = $request->user();
						
			if ($thisUser['role'] ===null)
				return response("For some reason you don't have any role ,please contact a system administrator",401);
			if($thisUser['role'] < $role)
				return response("You are not supposed to be in here",401);
		}
        return $next($request);
    }
}
