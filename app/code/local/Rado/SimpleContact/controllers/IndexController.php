<?php

class Rado_SimpleContact_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();   
 
/*        $block = $this->getLayout()->createBlock(
            'Mage_Core_Block_Template',
            'rado.simple_contact',
            array(
                'template' => 'rado/simple_contact.phtml'
            )
        );

        $this->getLayout()->getBlock('content')->append($block);

        $this->_initLayoutMessages('core/session');
*/

        $this->_addContent($this->getLayout()->createBlock('simplecontact/rado'));

        $this->renderLayout();

    }

    public function sendmailAction()
    {
        $params = $this->getRequest()->getParams();

        $mail = new Zend_Mail();
        $mail->setBodyText($params['comment']);
        $mail->setForm($params['email'], $params['name']);
        $mail->addTo('dick91a@gmail.com', 'Dick Cock');
        $mail->setSubject('Test Simple Contact Module for Magento');
        try{
            $email->send();
        }
        catch(Exception $e){
            Mage::getSingleton('core/session')->addError('Coś się z tym mailem zjebało');
        }

        $this->_redirect('rado-simplecontact/');
    }
}
