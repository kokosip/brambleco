<?php
class Test_Witarko_Block_List extends Mage_Catalog_Block_Product_List
{
    protected $_itemCollection = null;

    public function getProductCollection()
    {
        $rootCategoryId = Mage::app()->getStore()->getRootCategoryId();

        $collection = Mage::getModel('catalog/category')
            ->getProductCollection()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter(
                'sort_order',
                array('notnull' => false)
            );


        //Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($collection);
        //Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($collection);
				
        return $collection;
    }
}
