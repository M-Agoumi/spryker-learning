<?php

namespace Pyz\Zed\HelloString\Business\Reverser;

use Generated\Shared\Transfer\HelloStringTransfer;

interface StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloStringTransfer $helloStringTransfer
     *   
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer;
}