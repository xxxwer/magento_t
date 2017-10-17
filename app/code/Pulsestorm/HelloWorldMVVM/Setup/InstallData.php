<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Pulsestorm\HelloWorldMVVM\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * Authorization factory
     *
     * @var AuthorizationFactory
     */
    private $authFactory;

    /**
     * Init
     *
     * @param AuthorizationFactory $authFactory
     */
    public function __construct()
    {}

    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->endSetup();
    }
}
