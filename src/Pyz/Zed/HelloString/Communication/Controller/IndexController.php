<?php

namespace Pyz\Zed\HelloString\Communication\Controller;

use Generated\Shared\Transfer\HelloStringTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\HelloString\Business\HelloString getFacade()
 * helloStringTransfer
 */
class IndexController extends AbstractController
{

    /**
     * @return array
     */
    public function indexAction()
    {
        $helloStringTransfer = new HelloStringTransfer();
        $helloStringTransfer->setOriginalString("Hello Spryker!");

        $helloStringTransfer = $this->getFacade()->reverseString($helloStringTransfer);

        return ['string' => $helloStringTransfer->getReversedString()];
    }

}
