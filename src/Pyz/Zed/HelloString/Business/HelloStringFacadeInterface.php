<?php

namespace Pyz\Zed\HelloString\Business;

use Generated\Shared\Transfer\HelloStringTransfer;

interface HelloStringFacadeInterface
{
/**
     * Specification:
     * - Reverses string.
     * 
     * @api
     * 
     * @param \Generated\Shared\Transfer\HelloStringTransfer $HelloStringTransfer
     * 
     * @return \Generated\Shared\Transfer\HelloStringTransfer
     */
    public function reverseString(HelloStringTransfer $helloSprykerTransfer): HelloStringTransfer;
}
