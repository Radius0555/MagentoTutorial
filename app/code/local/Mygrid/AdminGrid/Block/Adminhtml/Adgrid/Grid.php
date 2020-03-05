<?php

class Mygrid_AdminGrid_Block_Adminhtml_Adgrid_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        parent::__contruct();

        $this->setId('adgrid_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        return 'admingrid/adgrid_collection';
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', 
            array(
                'header' => $this->__('ID'),
                'align' => 'right',
                'width' => '50px',
                'index' => 'id'
            )
        );

        $this->addColumn('item',
            array(
                'header' => $this->__('Items'),
                'index' => 'item'    
            )
        );
        return parent::_prepareColumns();
    }
}