<?php 

class Products_Show_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->getLayout()->getBlock('Block_Loop')->setMyname('vaibhav');
        $this->renderLayout();
    }
}
