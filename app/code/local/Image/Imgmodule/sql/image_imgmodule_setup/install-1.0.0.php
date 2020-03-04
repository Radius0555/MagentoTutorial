<?php

$installer = $this;
$installer->startSetup();

$installer->createEntityTables(
    $this->getTable('imgmodule/file')
);

$installer->addEntityType('imgmodule_file',Array(
    'entity_model'          =>'imgmodule/file',
    'table'                 =>'imgmodule/file_entity',
));

$installer->endSetup();

