<?php

/**
 * Authorize.net Test mode Block
 *
 * PHP version 5
 *
 * The license text...
 *
 * @category  AtlanticBT
 * @package   AuthNetTestMode
 * @author    Jamie Kahgee <jamie.kahgee@atlanticbt.com>
 * @copyright 2013 Jamie Kahgee
 * @license   http://www.atlanticbt.com/ Atlantic BT
 * @version   CVS: $Id:$
 * @link      <>
 * @see       References to other sections (if any)...
 */

/**
 * Authorize.net Test mode Block
 *
 * @category  AtlanticBT
 * @package   AuthNetTestMode
 * @author    Jamie Kahgee <jamie.kahgee@atlanticbt.com>
 * @copyright 2013 Jamie Kahgee
 * @license   http://www.atlanticbt.com/ Atlantic BT
 * @version   Release: @package_version@
 * @link      <>
 * @see       References to other sections (if any)...
 */
class AtlanticBT_AuthNetTestMode_Block_Checkout_Onepage_Validate
    extends Mage_Core_Block_Template
{
    //  {{{ _construct()

    /**
     * psuedo constructor
     *
     * @return void
     * @access protected
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('atlanticbt/authnettestmode/checkout/onepage/validate.phtml');
    }

    //  }}}
    //  {{{ storeInTestMode()

    /**
     * Get if the stores authorize.net payment method is in test mode or not
     *
     * @return integer 1|0
     * @access public
     */
    public function storeInTestMode()
    {
        return Mage::getStoreConfig('payment/authorizenet/test');
    }

    //  }}}
}
