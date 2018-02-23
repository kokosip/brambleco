<?php
 
class Test_Witarko_Model_Resource_Contact extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('witarko/contact', 'contact_id');
    }
}