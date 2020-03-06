<?php

class Tutgrid_AdmGrid_Model_Resource_Textbase extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _contruct()
    {
        $this->_init('admgrid/textbase', 'id');
    }
}
