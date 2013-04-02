<?php

/**
 * Authorize.net test mode block
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
 * Authorize.net test mode block
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
class AtlanticBT_AuthNetTestMode_Model_Observer
    extends Mage_Core_Model_Abstract
{
    //  {{{ checkBlock(Varien_Event_Observer $observer)

    /**
     * Checks the block being created and if its the authorize.net payment
     * form block, creates an anonymous child block to add to it so
     * we can spit out an error message if auth.net is in test mode
     *
     * @param Varien_Event_Observer $observer
     *
     * @return void
     */
    public function checkBlock(Varien_Event_Observer $observer)
    {
        Varien_Profiler::start('AUTH NET TEST MODE');
        $block = $observer->getBlock();
        if ('payment/form_cc' == $block->getType()) {
            $validate = Mage::app()->getLayout()
                ->createBlock('atlanticbt_authnettestmode/checkout_onepage_validate');
            $block->setChild('atlanticbt_authnettestmode', $validate);
        }
        Varien_Profiler::stop('AUTH NET TEST MODE');
    }

    //  }}}
}
