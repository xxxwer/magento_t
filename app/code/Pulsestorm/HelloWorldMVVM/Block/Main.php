<?php
namespace Pulsestorm\HelloWorldMVVM\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Pulsestorm\HelloWorldMVVM\Model\TodoItemFactory;

class Main extends Template
{
    protected $toDoFactory;
    public function __construct(Context $context, TodoItemFactory $toDoFactory)
    {
        $this->toDoFactory = $toDoFactory;
        parent::__construct($context);
    }

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

    public function testCrudModel()
    {
        var_dump(
            get_class($this->toDoFactory)
        );

        echo "<hr>";

        $todo = $this->toDoFactory->create();
        $todo->setData('item_text','Finish my Magento article')
            ->save();
        var_dump('Done');

        echo "<hr>";

        $todo = $this->toDoFactory->create();
        $todo = $todo->load(1);
        var_dump($todo->getData());
        var_dump($todo->getItemText());
        var_dump($todo->getData('item_text'));

    }
}