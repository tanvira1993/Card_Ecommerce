<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;

class CommonMiddleware
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
        
        
        if($idUserRole ==1 || $idUserRole == 0)
        {
            return $next($request);

        }
        else
        {
            return Response::json(['heading' => 'Access Denied, Login First!!', 'message' => 'Access Denied'], 403);

        }

        
    }
}
