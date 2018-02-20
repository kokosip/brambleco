<?php
class Display_Customgrid_Block_Adminhtml_Customgrid_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    /**
     * Display_Customgrid_Block_Adminhtml_Customgrid_Grid constructor.
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
        $collection = Mage::getModel('customgrid/displaygrid')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('contact_id', array(
            'header'    => Mage::helper('customgrid')->__('Id'),
            'align'     =>'left',
            'index'     => 'contact_id',
        ));

        $this->addColumn('created_at', array(
            'header'    => Mage::helper('customgrid')->__('Date'),
            'align'     =>'left',
            'index'     => 'created_at',
        ));

        $this->addColumn('name', array(
            'header'    => Mage::helper('customgrid')->__('Name'),
            'align'     =>'left',
            'index'     => 'name',
        ));

        $this->addColumn('email', array(
            'header'    => Mage::helper('customgrid')->__('Email'),
            'align'     =>'left',
            'index'     => 'email',
        ));

        $this->addColumn('telephone', array(
            'header'    => Mage::helper('customgrid')->__('Telephone'),
            'align'     =>'left',
            'index'     => 'telephone',
        ));

        $this->addColumn('comment', array(
            'header'    => Mage::helper('customgrid')->__('Description'),
            'width'     => '150px',
            'index'     => 'comment',
        ));

        return parent::_prepareColumns();
    }
}