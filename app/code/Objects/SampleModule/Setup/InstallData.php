<?php 
namespace Objects\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $setup-> startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('objects_sample_city'),
            [
                'name' => 'Alexandria'
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('objects_sample_city'),
            [
                'name' => 'Cairo'
            ]
        );
        $setup->endSetup();
    }
}