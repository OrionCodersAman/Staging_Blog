<?php
namespace Orion\Simple\Controller\Adminhtml\Post;

use Magento\Framework\Controller\ResultFactory;


class Edit extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend((__('Edit post')));
        return $resultPage;
    }
}