<?php

namespace Pyz\Zed\HelloString\Business;

use Generated\Shared\Transfer\HelloStringTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloString\Business\HelloStringBusinessFactory getFactory()
 */
class HelloStringFacade extends AbstractFacade implements HelloStringFacadeInterface
{
    /**
     * {@inheritDoc}
     * 
     * @api
     * 
     * @param \Generated\Shared\Transfer\HelloStringTransfer $HelloStringTransfer
     * 
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloStringTransfer);
    }
}
