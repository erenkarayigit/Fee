<?php
/**
 * Created by Magentix
 * Based on "Excellence Technologies" Module
 *
 * @category   Magentix
 * @package    Magentix_Fee
 * @author     Matthieu Vion (http://www.magentix.fr)
 * @license    This work is free software, you can redistribute it and/or modify it
 */

class Magentix_Fee_Block_Checkout_Total extends Mage_Checkout_Block_Total_Default
{
    //protected $_template = 'fee/fee.phtml';

    /**
     * Check if we need display both sobtotals
     *
     * @return bool
     */
    public function displayBoth()
    {
        return Mage::getSingleton('tax/config')->displayCartSubtotalBoth();
    }
}
