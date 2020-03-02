<?php

class Image_Imgmodule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $file = Mage::getModel('image_imgmodule/file');
        $file->setPath('C:/Users/kmagd/Downloads');
        $file->setName('credit-cards02');
        $file->setType('jpg');
        $file->save();

        $files = Mage::getModel('image_imgmodule/file')->getCollection();
        $files->load();
        var_dump($files);

        $files1 = Mage::getModel('image_imgmodule/file')->getCollection()
            ->addAttributeToSelect('path')
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('type');

        $files1->load();
        
        var_dump($files1);

        $files2 = Mage::getModel('image_imgmodule/file')->load(1);
        var_dump($files2);
    }
}
