<?php

class Image_Imgmodule_Model_Resource_File_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract 
{
    protected function _construct()
    {
        $this->_init('imgmodule/file');
    }
}
