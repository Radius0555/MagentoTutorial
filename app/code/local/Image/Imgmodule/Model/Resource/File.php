<?php

class Image_Imgmodule_Model_Resource_File extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('imgmodule/file', 'file_id');
    }
}
