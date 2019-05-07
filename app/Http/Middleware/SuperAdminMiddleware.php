<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;

class SuperAdminMiddleware
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
        
        if($idUserRole == 1 && $idUserRole != null)
        {
            return $next($request);

        }
        
        if($idUserRole != 1 || $idUserRole == null)
        {
            //return $next($request);
            return Response::json(['heading' => 'Access Denied, Login First !!', 'message' => 'Access Denied'], 403);

        }


        // return Response::json(['heading' => 'Access Denied', 'message' => array('userRole'=>$idUserRole,'userInfo'=>$idUser,'token'=>$token)], 403);
        
    }
}
