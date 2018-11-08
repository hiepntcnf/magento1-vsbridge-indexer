<?php
/**
 * @package  Divante
 * @author Agata Firlejczyk <afirlejczyk@divante.pl>
 * @copyright 2018 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

use Divante_VueStorefrontIndexer_Api_Mapping_FieldInterface as FieldInterface;

/**
 * Class Divante_VueStorefrontIndexer_Model_Index_Mapping_Generalmapping
 */
class Divante_VueStorefrontIndexer_Model_Index_Mapping_Generalmapping
{

    /**
     * @var array
     */
    private $commonProperties = [
        'position' => ['type' => FieldInterface::TYPE_LONG],
        'level' => ['type' => FieldInterface::TYPE_LONG],
        'created_at' => [
            'type' => FieldInterface::TYPE_DATE,
            'format' => FieldInterface::DATE_FORMAT,
        ],
        'updated_at' => [
            'type' => FieldInterface::TYPE_DATE,
            'format' => FieldInterface::DATE_FORMAT,
        ]
    ];

    /**
     * @return array
     */
    public function getCommonProperties()
    {
        return $this->commonProperties;
    }

    /**
     * @return array
     */
    public function getStockMapping()
    {
        return [
            'backorders' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'enable_qty_increments' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'is_decimal_divided' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'is_in_stock' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'is_qty_decimal' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'item_id' => ['type' => FieldInterface::TYPE_LONG],
            'low_stock_date' => [
                'type' => FieldInterface::TYPE_DATE,
                'format' => FieldInterface::DATE_FORMAT,
            ],
            'manage_stock' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'max_sale_qty' => ['type' => FieldInterface::TYPE_DOUBLE],
            'min_qty' => ['type' => FieldInterface::TYPE_DOUBLE],
            'min_sale_qty' => ['type' => FieldInterface::TYPE_DOUBLE],
            'notify_stock_qty' => ['type' => FieldInterface::TYPE_DOUBLE],
            'product_id' => ['type' => FieldInterface::TYPE_LONG],
            'qty' => ['type' => FieldInterface::TYPE_DOUBLE],
            'qty_increments' => ['type' => FieldInterface::TYPE_DOUBLE],
            'stock_id' => ['type' => FieldInterface::TYPE_LONG],
            'stock_status' => ['type' => FieldInterface::TYPE_LONG] ,
            'stock_status_changed_auto' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_backorders' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_enable_qty_inc' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_manage_stock' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_max_sale_qty' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_min_qty' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_min_sale_qty' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_notify_stock_qty' => ['type' => FieldInterface::TYPE_BOOLEAN],
            'use_config_qty_increments' => ['type' => FieldInterface::TYPE_BOOLEAN],
        ];
    }
}
