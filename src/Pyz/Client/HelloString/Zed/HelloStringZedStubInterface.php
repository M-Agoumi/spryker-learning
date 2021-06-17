<?php

namespace Pyz\Client\HelloString\Zed;

use Generated\Shared\Transfer\HelloStringTransfer;

interface HelloStringZedStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloStringTransfer $helloStringTransfer
     *
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer;
}