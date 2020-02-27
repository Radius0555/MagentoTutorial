<?php

class Example_Show2_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $categoryId = Mage::app()->getRequest()->getPost('category_id');

        $categoryIds = array($categoryId);//category id

        $collection = Mage::getModel('catalog/product')
                             ->getCollection()
                             ->joinField('category_id', 'catalog/category_product', 'category_id', 'product_id = entity_id', null, 'left')
                             ->addAttributeToSelect('*')
                             ->addAttributeToFilter('category_id', array('in' => $categoryIds));

        foreach($collection as $product){
            echo $product->getName().'<br>';
        }
    }
}
