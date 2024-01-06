<?php

namespace App\Base\Routes;

use Illuminate\Routing\Router;

class BaseRouteApi
{
    /**
     * @var array
     */
    private $middleware;

    /**
     * @var Router
     */
    private mixed $api;

    /**
     * BaseRouteApi constructor.
     */
    public function __construct()
    {
        $this->api = app('Illuminate\Routing\Router');
    }

    /**
     * @param array $middleware
     *
     * @return $this
     */
    public function middleware(array $middleware)
    {
        $this->middleware = $middleware;

        return $this;
    }

    /**
     * @param array $routes
     *
     * @return mixed
     */
    public function routes(array $routes)
    {
        if ($this->middleware) {
            return $this->makeMiddlewareRoute($routes);
        }

        foreach ($routes as $route) {
            $route::routes($this->api);
        }
    }

    /**
     * @param array $routes
     *
     * @return mixed
     */
    private function makeMiddlewareRoute(array $routes)
    {
        return $this->api->group($this->middleware, function () use ($routes) {
            $this->makeRoutes($routes);
        });
    }

    /**
     * @param array $routes
     */
    public function makeRoutes(array $routes)
    {
        foreach ($routes as $route) {
            $route::routes($this->api);
        }
    }
}