<?php

namespace Pyz\Zed\HelloString\Business;

use Pyz\Zed\HelloString\Business\Reverser\StringReverser;
use Pyz\Zed\HelloString\Business\Reverser\StringReverserInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloString\HelloStringConfig getConfig()
 * @method \Pyz\Zed\HelloString\Persistence\HelloStringQueryContainer getQueryContainer()
 */
class HelloStringBusinessFactory extends AbstractBusinessFactory
{
     /**
     * @return \Pyz\Zed\HelloString\Business\Reverser\StringReverserInterface
     */  
    public function createStringReverser(): StringReverserInterface
    {
        return new StringReverser();
    }
}
