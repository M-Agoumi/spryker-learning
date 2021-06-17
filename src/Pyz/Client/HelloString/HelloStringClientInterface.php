<?php

namespace Pyz\Client\HelloString;

use Generated\Shared\Transfer\HelloStringTransfer;

interface HelloStringClientInterface
{
    /**
     * Specification:
     * - Does Zed call.
     * - Reverses string.
     * 
     * @api 
     * 
     * @param \Generated\Shared\Transfer\HelloStringTransfer $helloStringTransfer
     *
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloStringTransfer): HelloStringTransfer;
}