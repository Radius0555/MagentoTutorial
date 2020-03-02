<?php

class Image_Imgmodule_Model_Resource_File_Collection extends Mage_Eav_Model_Entity_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('image_imgmodule/file');
    }
}