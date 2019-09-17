<?php

declare(strict_types = 1);

namespace App\Http\Middleware;

use App\Models\User\User;
use Closure;

class Api
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = $request->headers->get('user-id');
        $token  = $request->headers->get('token-api');

        if (User::repository()->isUserToken((int) $userId, $token) === false) {
            abort(403, 'Invalid API token provided.');
        }

        return $next($request);
    }
}
