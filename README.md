Description
-----------

Magento Add Fee or Discount to order Totals.

In a typical order, the order totals usually comprises of Sub Total, Shipping Cost, Taxes, Discount, based on these values the total order grand total is calculated.

This module adds a new line to order Totals. Use if you want to add an additional Credit Card Fee or Convince Free or Affiliate Discount or any other order total which will affect the order grand total.



Compatibility
-------------

Magento 1.7.x



How to use?
-----------

This is only basics of the adding a line item to order total, you must define your own rules in code.

Edit "Magentix_Fee_Model_Fee" class to set fee amount and your business logic to check if fee should be applied or not :

```
const FEE_AMOUNT = 20;
```

```
public static function canApply($address)
{
    //put here your business logic to check if fee should be applied or not
    return true;
}
```



Screenshot
----------

![Magentix Fee](https://github.com/magentix/Fee/tree/master/screenshots/magento_fee.png "Magentix Fee")
[Magentix Fee](https://github.com/magentix/Fee/tree/master/screenshots/magento_fee.png)