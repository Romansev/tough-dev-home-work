<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\JWT;

class UserUuid
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var JWT $auth */
        $auth = auth();
        $request->userUuid = $auth->getPayload()->get('uuid');

        return $next($request);
    }
}
