<?php

class Inchoo_Blog_IndexController
    extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $post = Mage::getModel('inchoo_blog/post');
        var_dump($post);
    }
}