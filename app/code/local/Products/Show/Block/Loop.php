<?php

class Products_Show_Block_Loop extends Mage_Catalog_Block_Product_List
{
    public $cat;

    public function getCategory()
    {
        $cat = Mage::app()->getRequest()->getPost('category_id');
        
        if(!empty($cat)){
            $categoryIds = array($cat);//category id

            $productCollection = Mage::getModel('catalog/product')
                                 ->getCollection()
                                 ->joinField('category_id', 'catalog/category_product', 'category_id', 'product_id = entity_id', null, 'left')
                                 ->addAttributeToSelect('*')
                                 ->addAttributeToFilter('category_id', array('in' => $categoryIds));
    
            return $productCollection;
        }else if(empty($cat)){    
            $productCollection = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
        
            return $productCollection;                                    
        }else{
            echo 'Chuj';
        }
    }
}