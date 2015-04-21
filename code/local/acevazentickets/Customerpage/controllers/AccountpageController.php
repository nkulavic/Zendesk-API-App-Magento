<?php 
/**
 * customize by: http://acevazenticketsphp.com
 * like us on facebook: http://www.facebook.com/pages/acevazenticketsphp/235451993242578
 * follow us on twitter: http://twitter.com/acevazenticketsphp
 */
class acevazenticketsphp_Customerpage_AccountpageController extends Mage_Core_Controller_Front_Action {

    protected function _getSession() {
        return Mage::getSingleton('customer/session');
    }

    public function preDispatch() {
        parent::preDispatch();
            if (!Mage::getSingleton('customer/session')->authenticate($this)) {
                $this->setFlag('', 'no-dispatch', true);
        }
    }

    // http://localhost/acevazenticketsphp_magento/custompage/accountpage/index
    public function indexAction() { // landing page
        $this->loadLayout();
        $this->renderLayout();

    }
    
}