<?php

class Tutgrid_AdmGrid_Block_Adminhtml_Textbase_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('id');
        $this->setId('admgrid_textbase_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        return 'admgrid/textbase_collection';
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
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

        $this->addColumn('item',
            array(
                'header' => $this->__('Items'),
                'index' => 'item'
            )
        );
        return parent::_prepareColumns();
    }
}
