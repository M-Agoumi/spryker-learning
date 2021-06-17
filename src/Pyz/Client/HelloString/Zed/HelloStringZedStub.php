<?php

namespace Pyz\Client\HelloString\Zed;

use Generated\Shared\Transfer\HelloStringTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloStringZedStub implements HelloStringZedStubInterface
{
    /**
     * @var ZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param HelloStringTransfer $helloStringTransfer
     * @return HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer
    {
        /** @var HelloStringTransfer $helloStringTransfer */
        $helloStringTransfer = $this->zedRequestClient->call('/hello-string/gateway/reverse-string', $helloStringTransfer);

        return $helloStringTransfer;
    }
}
