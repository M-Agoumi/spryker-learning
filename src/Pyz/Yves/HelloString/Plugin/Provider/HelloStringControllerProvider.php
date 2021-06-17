<?php

namespace Pyz\Yves\HelloString\Plugin\Provider;

use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;

class HelloStringControllerProvider extends AbstractYvesControllerProvider
{

    const HELLOSTRING_INDEX = 'hellostring-index';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createGetController('/hello-string', static::HELLOSTRING_INDEX, 'HelloString', 'Index', 'index');
    }

}
