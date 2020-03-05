<?php

class Mymodule_Wine_Model_Wine extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('wine/wine');
    }
}