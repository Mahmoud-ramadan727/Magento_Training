<?php 

namespace Objects\SampleModule\Controller\Adminhtml\City;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action 
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
 
    }
}