<?php 
// Step 3. The Controller File //

// In the controller file, we override the front routes action and the method indexAction() is the landing page of the custom customer page in front end. //
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
    public function indexAction() { // landing page
        $this->loadLayout();
        $this->renderLayout();

    }
    
}