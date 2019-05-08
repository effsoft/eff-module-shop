<?php

namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffMysqlActiveRecord;

class SkuModel extends EffMysqlActiveRecord
{
    public static function tableName()
    {
        return 'sku';
    }

    public function attributes()
    {
        return [
            'id',
            'uid',
            'item_id',
            'number',
            'parent_id',
            'name',
            'covers',
            'price',
            'currency',
            'inventory',
            'order',
        ];
    }
}