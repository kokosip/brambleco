<?php

class Test_Witarko_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Array of available orders to be used for sort by
     *
     * @return array
     */
    public function getAvailableOrders()
    {
        return array(
            // attribute name => label to be used
            'sort_order' => $this->__('Sort Order')
        );
    }

    /**
     * Return product collection to displayed by our list block
     *
     * @return Mage_Catalog_Model_Resource_Product_Collection
     */
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