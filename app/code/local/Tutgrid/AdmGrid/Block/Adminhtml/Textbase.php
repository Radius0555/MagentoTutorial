<?php

class Tutgrid_AdmGrid_Block_Adminhtml_Textbase extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'admgrid';
        $this->_controller = 'adminhtml_textbase';
        $this->_headerText = 'Admin Grid 2';
        parent::__construct();
    }
}