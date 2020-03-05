<?php

class Mymodule_Wine_Model_Resource_Wine_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        // parent::_construct();
        $this->_init('wine/wine');
    }
}