<?php
namespace Objects\SampleModule\Model\ResourceModel\City;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Objects\SampleModule\Model\City;
use Objects\SampleModule\Model\ResourceModel\City as CityResource;



class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(City::class, CityResource::class);
    }
}