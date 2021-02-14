<?php
namespace Objects\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class City extends AbstractModel
{    
    protected function _construct()
    {
        $this->_init(\Objects\SampleModule\Model\ResourceModel\City::class);
    }
}