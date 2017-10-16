<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Pulsestorm\HelloWorldMVVM\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
                    $installer->getTable('pulsestorm_todocrud_todoitem')
                            )->addColumn(
                                'pulsestorm_todocrud_todoitem_id',
                                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                                null,
                                array (
                      'identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,
                    ),
                                'Entity ID'
                            )->addColumn(
                                'item_text',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                255,
                                array (
                      'nullable' => false,
                    ),
                                'Text of the to do item'

                            )->addColumn(
                                'date_completed',
                                \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                                null,
                                array (
                      'nullable' => true,
                    ),
                                'Date the item was completed'
                     )->addColumn(
                                'creation_time',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                                null,
                                array (
                    ),
                                'Creation Time'
                            )->addColumn(
                                'update_time',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                                null,
                                array (
                    ),
                                'Modification Time'
                            )->addColumn(
                                'is_active',
                                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                                null,
                                array (
                      'nullable' => false,'default' => '1',
                    ),
                                'Is Active'
                            );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}


