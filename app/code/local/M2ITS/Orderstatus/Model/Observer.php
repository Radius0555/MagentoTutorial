<?php

/**
 * DataLayer
 * Copyright © 2016 MagePal. All rights reserved.
 * See COPYING.txt for license details.
 */
class M2ITS_Orderstatus_Model_Observer
{

    /**
     * Add order information into Google Tag Manager block to render on checkout success pages
     *
     * @param Varien_Event_Observer $observer
     */
    public function changeStatusTestOrder($observer)
    {
        $order = $observer->getEvent()->getOrder();
        if($order->getId()) {
            if($shippingAdress = $order->getBillingAddress()) {
                $firstName = $shippingAdress->getFirstname();
                //CHANGE OF ORDER STATUS TO CANCELED WHEN IT IS A TEST ORDER
                $firstNameConfig = Mage::getStoreConfig('m2itssections/m2its_group/m2its_input',Mage::app()->getStore());
                if($firstNameConfig !== NULL){
                    if ((string)$firstName === (string)$firstNameConfig) {
                        Mage::log('test zamowienie - status zamowienia, warunek ok ', null, 'testlog.log', true);
                        $order->setStatus(Mage_Sales_Model_Order::STATE_CANCELED);
                    }
                }
            }
        }
        return;
    }

    public function changeStatusTestOrderCreate($observer)
    {
        $order = $observer->getEvent()->getOrder();
        if($order->getId()) {
            if($shippingAdress = $order->getBillingAddress()) {
                $firstName = $shippingAdress->getFirstname();
                //CHANGE OF ORDER STATUS TO CANCELED WHEN IT IS A TEST ORDER
                $firstNameConfig = Mage::getStoreConfig('m2itssections/m2its_group/m2its_input',Mage::app()->getStore());
                if($firstNameConfig !== NULL){
                    if ((string)$firstName === (string)$firstNameConfig) {
                        Mage::log('test zamowienie - tworzenie zamowienia, warunek ok ', null, 'testlog.log', true);
                        $order->setStatus(Mage_Sales_Model_Order::STATE_CANCELED);
                    }
                }
            }
        }
        return;
    }
}
