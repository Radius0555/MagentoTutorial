<?php

class Tutgrid_AdmGrid_Adminhtml_TextbaseController extends Mage_Adminhtml_Controller_Action
{
    
	protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admgrid/textbase');
    }
    public function indexAction()
    {
        $this->loadLayout();
//        $this->_addContent($this->getLayout()->createBlock('admgrid/adminhtml_textbase'));
        $this->_setActiveMenu('admgrid/adminhtml_textbase');
        $this->renderLayout();
    }
}
