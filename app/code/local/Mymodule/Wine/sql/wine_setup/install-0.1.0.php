<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('wine'))
    ->addColumn('wine_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10, array(
            'auto_increment' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary' => true
        ), 'Wine Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
            'nullable' => false,
        ), 'Name')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_INTEGER, 1, array(
            'nullable' => false,
        ), 'Status')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
            'nullable' => false,
        ), 'Created At')
    ->addColumn('executed_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
            'nullable' => false,
        )
    )
    ->setOption('type', 'InnoDB')
    ->setOption('charset', 'utf8')
    ->setComment('Wine .xls Files Table');
$installer->getConnection()->createTable($table);

$installer->endSetup();