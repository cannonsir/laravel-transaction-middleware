<?php

namespace Cannonsir\TransactionMiddleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Throwable;

class Middleware
{
    public function handle($request, Closure $next)
    {
        DB::beginTransaction();

        $response = $next($request);

        if ($this->isErrorResponse($response)) {
            DB::rollBack();
        } else {
            DB::commit();
        }

        return $response;
    }

    /**
     * @param $response
     * @return bool
     */
    private function isErrorResponse($response): bool
    {
        $isErrorResponse = false;

        if (property_exists($response, 'exception') && $response->exception instanceof Throwable) {
            $isErrorResponse = true;
        }

        return $isErrorResponse;
    }
}