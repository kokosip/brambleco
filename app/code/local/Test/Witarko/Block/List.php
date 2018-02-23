<?php

class Test_Witarko_Block_List extends Mage_Catalog_Block_Product_Abstract
{
    public function getText()
    {
        return "I am inside `" . get_class(). "` block and it is my first custom block ever !";
    }
		
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
    }
}
