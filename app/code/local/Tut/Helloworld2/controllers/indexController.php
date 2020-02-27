<?php

class Tut_helloworld_IndexController extends Mage_Core_COntroller_Front_Action
{
    public function indexAction()
    {
        echo 'index function';
    }

    public function addAction()
    {
        echo 'add function';
    }

    public function editAction()
    {
        echo 'editr Action';
    }

    public function deleteAction()
    {
        echo 'delete function';
    }
}