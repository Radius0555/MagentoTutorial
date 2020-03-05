<?php

class Mymodule_Wine_Model_Resource_Wine extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('wine/wine', 'wine_id');
    }
}