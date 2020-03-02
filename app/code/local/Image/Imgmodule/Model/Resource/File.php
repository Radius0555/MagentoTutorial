<?php

class Image_Imgmodule_Model_Resource_File extends Mage_Eav_Model_Entity_Abstract
{
    public function __construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('image_imgmodule_file');
        $this->setConnection(
            $resource->getConnection('image_read'),
            $resource->getConnection('image_write')
        );    
    }

    protected function _getDefaultAttributes()
    {
        return array(
            'id',
            'imagePath',
            'imageName',
            'imageType'
        );
    }
}