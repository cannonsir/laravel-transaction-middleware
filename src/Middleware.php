<?php

namespace Cannonsir\TransactionMiddleware;

use Closure;
use Illuminate\Support\Facades\DB;

class Middleware
{
    public function handle($request, Closure $next)
    {
        DB::beginTransaction();

        $response = $next($request);

        $response->exception instanceof \Throwable ? DB::rollBack() : DB::commit();

        return $response;
    }
}