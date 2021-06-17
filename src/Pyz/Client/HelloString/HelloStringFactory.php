<?php

namespace Pyz\Client\HelloString;

use Pyz\Client\HelloString\Zed\HelloStringZedStub;
use Pyz\Client\HelloString\Zed\HelloStringZedStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloStringFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Client\HelloString\Zed\HelloStringZedStubInterface
     */
    public function createHelloStringZedStub(): HelloStringZedStubInterface
    {
        return new HelloStringZedStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloStringDependencyProvider::CLIENT_ZED_REQUEST);
    }
}