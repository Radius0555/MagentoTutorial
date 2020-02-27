<?php

if (is_null($this->_productCollection)) {
            $layer = $this->getLayer(); //wyszukiwarka kategorii
            /* @var $layer Mage_Catalog_Model_Layer */
            if ($this->getShowRootCategory()) { //jeżeli 
                $this->setCategoryId(Mage::app()->getStore()->getRootCategoryId());
            }

            if (Mage::registry('product')) {
                /** @var Mage_Catalog_Model_Resource_Category_Collection $categories */
                $categories = Mage::registry('product')->getCategoryCollection()
                    ->setPage(1, 1)
                    ->load();
                if ($categories->count()) {
                    $this->setCategoryId($categories->getFirstItem()->getId());
                }
            }

            $origCategory = null;
            if ($this->getCategoryId()) {
                $category = Mage::getModel('catalog/category')->load($this->getCategoryId());
                if ($category->getId()) {
                    $origCategory = $layer->getCurrentCategory();
                    $layer->setCurrentCategory($category);
                    $this->addModelTags($category);
                }
            }
            $this->_productCollection = $layer->getProductCollection();

            $this->prepareSortableFieldsByCategory($layer->getCurrentCategory());

            if ($origCategory) {
                $layer->setCurrentCategory($origCategory);
            }
        }



/*        <div>
        <label for="categoryProducts"><h5>Wybierz kategorie:</h5></label></br>
        <select id="categoryProducts">
            <option value="">Wszystko</option>
            <option value="2">Telewizory</option>
            <option value="5">Komputery</option>
            <option value="6">Laptopy</option>
            <option value="7">Monitory</option>
        </select></div></br>

<script type="text/javascript">

    jQuery(function($) {

        jQuery("#categoryProducts").change(function(e){
            obj=$(this);
            jQuery.ajax({
                url: "show2/index/index",
                type: "POST",
                data: {
                    category_id: obj.val(), 
                },
                success: function(data){
                    alert("SUCCESS: " + obj.val());
                },
                error: function(data){
                    alert('CHUJ: ', data);
                },
            });
        });
    });        
</script>
