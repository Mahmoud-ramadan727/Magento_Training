<?php 
namespace Objects\SampleModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup-> startSetup();
        $table = $setup->getConnection()->newTable(
            $setup->getTable('objects_sample_city')
        )->addColumn(
            'id' ,
            Table::TYPE_INTEGER,
            null,
            ['identity' => true ,'nullable' => false , 'primary' => true],
            'City Id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'City Name'
        )->addIndex(
            $setup->getIdxName('objects_sample_city' ,['name']),['name']
        )->setComment(
            'Sample Cities'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}