<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserMiddleware
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
    	$idUserRole = $request->header('idUserRole');
    	$idUser = $request->header('idUser');
    	$token = $request->header('Token');
    	if($idUserRole != 0 || $idUserRole == null )
    	{
    		//return $next($request);
            return Response::json(['heading' => 'Access Denied, Login First!!', 'message' => 'Access Denied'], 403);

        }
        if($idUserRole == 0 && $idUserRole != null)
        {
            /*print_r($idUserRole);
            exit;*/
            return $next($request);

        }



    }
}
