<?php
namespace Objects\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class City extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('objects_sample_city','id');
    }
}