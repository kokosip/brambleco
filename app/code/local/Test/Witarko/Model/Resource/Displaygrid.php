<?php
/**
 * Created by PhpStorm.
 * User: liz.cherukalethu
 * Date: 22/02/2017
 * Time: 10:36
 */
class Test_Witarko_Model_Resource_Displaygrid extends Mage_Core_Model_Resource_Db_Abstract
{
    /***
     * Initialize resource model
     */
    public function _construct()
    {
        $this->_init('witarko/displaygrid','contact_id');
    }

}