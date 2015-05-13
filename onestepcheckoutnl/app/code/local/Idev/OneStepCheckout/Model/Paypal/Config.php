<?php
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/Magestore/PaypalBNCode/Model/Config.php');
class Idev_OneStepCheckout_Model_Paypal_Config extends Magestore_PaypalBNCode_Model_Config
{

    /**
     * BN code getter override method
     *
     * @param string $countryCode ISO 3166-1
     */
    public function getBuildNotationCode ($countryCode = null)
    {
        if (Mage::helper('onestepcheckout')->isEnterprise()) {
            $bnCode = 'OneStepCheckout_SI_MagentoEE';
        } else {
            $bnCode = 'OneStepCheckout_SI_MagentoCE';
        }

        return $bnCode;
    }

}
