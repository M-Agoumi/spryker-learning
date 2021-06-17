<?php

namespace Pyz\Zed\HelloString\Business\Reverser;

use Generated\Shared\Transfer\HelloStringTransfer;

class StringReverser implements StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloStringTransfer $helloStringTransfer
     * 
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer
    {
        $reversedString = strrev($helloStringTransfer->getOriginalString());
        $helloStringTransfer->setReversedString($reversedString);

        return $helloStringTransfer;
    }
}