<?php
class testing_witarkotesting_IndexController extends Mage_Core_Controller_Front_Action {        
    public function indexAction() {
        echo 'Hello World';
				$this->loadLayout();
				$this->renderLayout();
    }
}
?>