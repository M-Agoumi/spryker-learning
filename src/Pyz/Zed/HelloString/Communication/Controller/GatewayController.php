<?php

namespace Pyz\Zed\HelloString\Communication\Controller;

use Generated\Shared\Transfer\HelloStringTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\HelloString\Business\HelloStringFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\HelloStringTransfer $helloStringTransfer
     *
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseStringAction(HelloStringTransfer $helloStringTransfer): HelloStringTransfer
    {
        return $this->getFacade()->reverseString($helloStringTransfer);
    }
}