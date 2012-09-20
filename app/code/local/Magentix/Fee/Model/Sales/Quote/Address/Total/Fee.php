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

class Magentix_Fee_Model_Sales_Quote_Address_Total_Fee extends Mage_Sales_Model_Quote_Address_Total_Abstract
{

    protected $_code = 'fee';

    /**
     * Collect fee address amount
     *
     * @param Mage_Sales_Model_Quote_Address $address
     * @return Magentix_Fee_Model_Sales_Quote_Address_Total_Fee
     */
    public function collect(Mage_Sales_Model_Quote_Address $address)
    {
        parent::collect($address);

        $this->_setAmount(0);
        $this->_setBaseAmount(0);

        $items = $this->_getAddressItems($address);
        if (!count($items)) {
            return $this;
        }

        $quote = $address->getQuote();

        if (Magentix_Fee_Model_Fee::canApply($address)) {
            $exist_amount = $quote->getFeeAmount();
            $fee = Magentix_Fee_Model_Fee::getFee();
            $balance = $fee - $exist_amount;

            $address->setFeeAmount($balance);
            $address->setBaseFeeAmount($balance);

            $quote->setFeeAmount($balance);

            $address->setGrandTotal($address->getGrandTotal() + $address->getFeeAmount());
            $address->setBaseGrandTotal($address->getBaseGrandTotal() + $address->getBaseFeeAmount());
        }

        return $this;
    }

    /**
     * Add fee information to address
     *
     * @param Mage_Sales_Model_Quote_Address $address
     * @return Magentix_Fee_Model_Sales_Quote_Address_Total_Fee
     */
    public function fetch(Mage_Sales_Model_Quote_Address $address)
    {
        $amount = $address->getFeeAmount();
        $address->addTotal(array(
            'code' => $this->getCode(),
            'title' => Mage::helper('fee')->__('Fee'),
            'value' => $amount
        ));
        return $this;
    }

}