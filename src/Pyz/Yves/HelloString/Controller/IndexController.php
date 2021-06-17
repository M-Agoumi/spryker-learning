<?php

namespace Pyz\Yves\HelloString\Controller;

use Generated\Shared\Transfer\HelloStringTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;

/**
 * @method \Pyz\Client\HelloString\HelloStringClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     *
     * @return View
     */
    public function indexAction(): View
    {
        $helloStringTransfer = new HelloStringTransfer();
        $helloStringTransfer->setOriginalString("Hello Spryker!");

        $helloStringTransfer = $this->getClient()->reverseString($helloStringTransfer);

        $data = ['reversedString' => $helloStringTransfer->getReversedString()];

        return $this->view(
            $data,
            [],
            '@HelloString/views/index/index.twig'
        );
    }
}
