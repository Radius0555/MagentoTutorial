<?php

class Tutgrid_AdmGrid_Block_Adminhtml_Admgrid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'admgrid';
        $this->_controller = 'adminhtml_admgrid';
        $this->_headerText = 'Admin Grid 2';
        parent::__construct();
    }
}
