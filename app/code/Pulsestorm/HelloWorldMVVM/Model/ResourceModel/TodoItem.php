<?php
namespace Pulsestorm\HelloWorldMVVM\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TodoItem extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('pulsestorm_todocrud_todoitem','pulsestorm_todocrud_todoitem_id');
    }
}
