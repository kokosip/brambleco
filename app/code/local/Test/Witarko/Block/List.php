<?php

class Test_Witarko_Block_List extends Mage_Catalog_Block_Product_Abstract
{		
	public function getProductCollection($sortOrder)
    {
        $rootCategoryId = Mage::app()->getStore()->getRootCategoryId();

        $collection = Mage::getModel('catalog/category')
            ->getProductCollection()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter(
                'sort_order',
                array('notnull' => false)
            )
			->addAttributeToSort('sort_order', $sortOrder);
        return $collection;
    }
		
	public function addOrderToAvailableOrders()
	{
		return "lalal";
	}
		
	public function getContactCollection()
	{
		$data = Mage::getModel('witarko/contact');
		
		$collection = $data->getCollection();
		
		return $collection;
	}
}
