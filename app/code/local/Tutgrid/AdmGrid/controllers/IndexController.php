<?php

class Tutgrid_AdmGrid_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $recipientName = 'Chuju drogi';
        $recipientEmail = 'test@magestore.com';

        $store = Mage::app()->getStore();
        $translate = Mage::getSingleton('core/translate');
        $translate->setTranslateInline(false);

        Mage::getModel('core/eamial_template')->setDesignConfig(array
        ('area' => 'frontend',
         'store' => $store->getId()
        ))->sendTransactional(
            Mage::getStoreConfig('admgrid/email/template', $store),
            Mage::getStoreConfig('trans_email/ident_general', $store),
            $recipientEmail,
            $recipientName,
            array(
                'store' => $store,
                'recipient_name' => $recipientName,
                'recipient_email' => $recipientEmail
            )
        );
    $translate->setTranslateInline(true);

        Mage::getSingleton('core/session')->addSuccess(Mage::helper('admgrid')->__('Email has been sent successfully!'));

        $this->loadLayout();
        $this->renderLayout();
    }
}