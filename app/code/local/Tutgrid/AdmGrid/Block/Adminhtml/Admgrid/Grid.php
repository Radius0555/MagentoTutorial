<?php

class Tutgrid_AdmGrid_Block_Adminhtml_Admgrid_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function _construct()
    {
        parent::_construct();
        $this->setDefaultSort('id');
        $this->setId('admgrid_admgrid_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel('admgrid/textbase_collection');
//        var_dump($collection);
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $this->addColumn('id',
            array(
                'header' => $this->__('ID'),
                'align' => 'right',
                'width' => '5%',
                'index' => 'id'
            )
        );

        $this->addColumn('items',
            array(
                'header' => $this->__('Items'),
                'index' => 'items'
            )
        );
        return parent::_prepareColumns();
    }
}
