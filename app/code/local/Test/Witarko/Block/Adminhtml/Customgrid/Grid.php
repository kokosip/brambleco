<?php
class Test_Witarko_Block_Adminhtml_Customgrid_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    /**
     * Test_Witarko_Block_Adminhtml_Customgrid_Grid constructor.
     */

    public function __construct()
    {
        parent::__construct();
        $this->setId('customgridGrid'); // set’s the ID of our grid
        $this->setDefaultSort('contact_id'); // sorting column to use in our grid
        $this->setDefaultDir('ASC'); // sorting order
        $this->setSaveParametersInSession(true); // sets your grid operations in session
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('witarko/displaygrid')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('contact_id', array(
            'header'    => Mage::helper('witarko')->__('Id'),
            'align'     =>'left',
            'index'     => 'contact_id',
        ));

        $this->addColumn('created_at', array(
            'header'    => Mage::helper('witarko')->__('Date'),
            'align'     =>'left',
            'index'     => 'created_at',
        ));

        $this->addColumn('name', array(
            'header'    => Mage::helper('witarko')->__('Name'),
            'align'     =>'left',
            'index'     => 'name',
        ));

        $this->addColumn('email', array(
            'header'    => Mage::helper('witarko')->__('Email'),
            'align'     =>'left',
            'index'     => 'email',
        ));

        $this->addColumn('telephone', array(
            'header'    => Mage::helper('witarko')->__('Telephone'),
            'align'     =>'left',
            'index'     => 'telephone',
        ));

        $this->addColumn('comment', array(
            'header'    => Mage::helper('witarko')->__('Description'),
            'width'     => '150px',
            'index'     => 'comment',
        ));

        return parent::_prepareColumns();
    }
}