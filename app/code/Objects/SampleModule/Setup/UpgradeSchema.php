<?php 
namespace Objects\SampleModule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup-> startSetup();
        if(version_compare($context->getVersion(),'1.0.1','<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('objects_sample_city'),
                'region_id',
                [
                    'type' => Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Region Id'
                ]
            );
        }
        if(version_compare($context->getVersion(),'1.0.2','<')){
            $setup->getConnection()->modifyColumn(
                $setup->getTable('objects_sample_city'),
                'region_id',
                ['type' => Table::TYPE_INTEGER, 'unsigned' => true, 'nullable' => false]
            );

            $setup->getConnection()->addForeignKey(
                $setup->getFkName('objects_sample_city', 'region_id', $setup->getTable('directory_country_region'), 'region_id'),
                $setup->getTable('objects_sample_city'),
                'region_id',
                $setup->getTable('directory_country_region'),
                'region_id',
                Table::ACTION_NO_ACTION
            );
        }
         
        $setup->endSetup();
    }
}