<?php
namespace Pulsestorm\HelloWorldMVVM\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage('Hello Again World');
        // goto url: http://mage.local:4123/hello_mvvm/hello/world/name/aaaa see name
        $this->setName($this->getRequest()->getParam('name'));
    }

    public function getGoodbyeMessage()
    {
        return 'Goodbye World';
    }
}