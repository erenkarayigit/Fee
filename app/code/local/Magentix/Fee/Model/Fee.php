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

class Magentix_Fee_Model_Fee extends Varien_Object
{

    /**
     * Fee Amount
     *
     * @var int
     */
    const FEE_AMOUNT = 20;

    /**
     * Retrieve Fee Amount
     *
     * @static
     * @return int
     */
    public static function getFee()
    {
        return self::FEE_AMOUNT;
    }

    /**
     * Check if fee can be apply
     *
     * @static
     * @param Mage_Sales_Model_Quote_Address $address
     * @return bool
     */
    public static function canApply($address)
    {
        // Put here your business logic to check if fee should be applied or not

        // Example of data retrieved :
        // $address->getShippingMethod(); > flatrate_flatrate
        // $address->getQuote()->getPayment()->getMethod(); > checkmo
        // $address->getCountryId(); > US
        // $address->getQuote()->getCouponCode(); > COUPONCODE

        return true;
    }

}