<?php

namespace CannonSir\TransactionMiddleware;

use Illuminate\Routing\Router;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        /* @var $router Router */
        $router = $this->app['router'];

        if (method_exists($router, 'aliasMiddleware')) {
            return $router->aliasMiddleware('transaction', Middleware::class);
        }
    }
}