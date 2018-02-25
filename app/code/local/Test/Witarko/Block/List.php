<?php

class Test_Witarko_Block_List extends Mage_Catalog_Block_Product_Abstract
{		
	protected $_directionVarName = 'dir';
	
	protected $_orderVarName = 'order';
	
	protected $_direction = 'asc';
	
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
		
	public function getPagerUrl($params=array())
    {
        $urlParams = array();
        $urlParams['_current']  = true;
        $urlParams['_escape']   = true;
        $urlParams['_use_rewrite']   = true;
        $urlParams['_query']    = $params;
        return $this->getUrl('*/*/*', $urlParams);
    }
	
	public function getOrderUrl($order, $direction)
    {
        if (is_null($order)) {
            $order = $this->getCurrentOrder() ? $this->getCurrentOrder() : $this->_availableOrder[0];
        }
		
        return $this->getPagerUrl(array(
            $this->getOrderVarName()=>$order,
            $this->getDirectionVarName()=>$direction
        ));
    }
	
	public function getDirectionVarName()
    {
        return $this->_directionVarName;
    }
	
	public function getOrderVarName()
    {
        return $this->_orderVarName;
    }
	
	public function getCurrentDirection()
    {
        $dir = $this->_getData('_current_grid_direction');
        if ($dir) {
            return $dir;
        }

        $directions = array('asc', 'desc');
        $dir = strtolower($this->getRequest()->getParam($this->getDirectionVarName()));
        if ($dir && in_array($dir, $directions)) {
            if ($dir == $this->_direction) {
                Mage::getSingleton('catalog/session')->unsSortDirection();
            } else {
                $this->_memorizeParam('sort_direction', $dir);
            }
        } else {
            $dir = Mage::getSingleton('catalog/session')->getSortDirection();
        }
        // validate direction
        if (!$dir || !in_array($dir, $directions)) {
            $dir = $this->_direction;
        }
        $this->setData('_current_grid_direction', $dir);
        return $dir;
    }
	
	protected function _memorizeParam($param, $value)
    {
        $session = Mage::getSingleton('catalog/session');
        if ($this->_paramsMemorizeAllowed && !$session->getParamsMemorizeDisabled()) {
            $session->setData($param, $value);
        }
        return $this;
    }
		
	public function getContactCollection()
	{
		$data = Mage::getModel('witarko/contact');
		
		$collection = $data->getCollection();
		
		return $collection;
	}
}
