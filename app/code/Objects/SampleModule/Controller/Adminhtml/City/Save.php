<?php

namespace Objects\SampleModule\Controller\Adminhtml\City;

use Objects\SampleModule\Model\CityFactory;

class Save extends \Magento\Backend\App\Action
{
    private $cityFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        CityFactory $cityFactory
    ) {
        $this->cityFactory = $cityFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->cityFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();
        return $this->resultRedirectFactory->create()->setPath('objects/city/index');
    }
}