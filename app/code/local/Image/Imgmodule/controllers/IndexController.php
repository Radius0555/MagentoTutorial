<?php

class Image_Imgmodule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $dates = Mage::getModel('imgmodule/file')->getCollection();

        foreach($dates as $date){
            echo 'Tada: '.($date->getName());
        }
    }
}
