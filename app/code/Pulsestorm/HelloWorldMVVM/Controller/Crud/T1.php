<?php
namespace Pulsestorm\HelloWorldMVVM\Controller\Crud;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class T1 extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        var_dump(__METHOD__);
        // $page_object = $this->pageFactory->create();;
        // return $page_object;
    }
}