<?php
/**
 * Created by Magentix
 * Based on Module from "Excellence Technologies" (excellencetechnologies.in)
 *
 * @category   Magentix
 * @package    Magentix_Fee
 * @author     Matthieu Vion (http://www.magentix.fr)
 * @license    This work is free software, you can redistribute it and/or modify it
 */

class Magentix_Fee_Block_Adminhtml_Total extends Mage_Adminhtml_Block_Sales_Order_Create_Totals_Default
{
    //protected $_template = 'fee/fee.phtml';

    /**
     * Check if we need display both subtotals
     *
     * @return bool
     */
    public function displayBoth()
    {
        return Mage::getSingleton('tax/config')->displayCartSubtotalBoth();
    }
}