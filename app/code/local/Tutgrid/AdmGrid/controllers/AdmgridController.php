<?php

class Tutgrid_AdmGrid_AdmgridController extends Mage_Adminhtml_Controller_Action
{
    
	protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admingrid/adgrid');
    }
    public function indexAction()
    {
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('admgrid/adminhtml_Admgrid'));
        $this->renderLayout();
    }
}
