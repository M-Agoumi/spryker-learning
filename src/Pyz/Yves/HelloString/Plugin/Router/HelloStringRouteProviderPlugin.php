<?php

namespace Pyz\Yves\HelloString\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloStringRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    protected const ROUTE_HELLO_SPRYKER_INDEX = 'hello-string-index';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @api
     *
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addHelloStringIndexRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addHelloStringIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/hello-string', 'HelloString', 'Index', 'indexAction');
        $routeCollection->add(static::ROUTE_HELLO_SPRYKER_INDEX, $route);

        return $routeCollection;
    }
}