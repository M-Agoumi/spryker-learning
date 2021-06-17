<?php

namespace Pyz\Client\HelloString;

use Generated\Shared\Transfer\HelloStringTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\HelloString\HelloStringFactory getFactory()
 */
class HelloStringClient extends AbstractClient implements HelloStringClientInterface
{
    /**
     * {@inheritDoc}
     * 
     * @api 
     * 
     * @param \Generated\Shared\Transfer\HelloStringTransfer $helloStringTransfer
     *
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer
    {
        return $this->getFactory()
            ->createHelloStringZedStub()
            ->reverseString($helloStringTransfer);
    }
}