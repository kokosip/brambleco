<?php
class Test_Witarko_Block_Adminhtml_Customgrid extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct()
    {
        $this->_controller = 'adminhtml_customgrid'; //locations of the grid.php
        $this->_blockGroup = 'test_witarko';
        $this->_headerText = Mage::helper('witarko')->__('Manage Contact');
        $this->_addButtonLabel = Mage::helper('witarko')->__('Add Contact');
        parent::__construct();
    }


}