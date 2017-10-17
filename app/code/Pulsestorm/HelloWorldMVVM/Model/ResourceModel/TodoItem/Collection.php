<?php
namespace Pulsestorm\HelloWorldMVVM\Model\ResourceModel\TodoItem;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Pulsestorm\HelloWorldMVVM\Model\TodoItem','Pulsestorm\HelloWorldMVVM\Model\ResourceModel\TodoItem');
    }
}
