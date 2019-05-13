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
            'shop_id',
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

    public function getCoversArray(){
        return json_decode($this->covers,true);
    }

    public function setCoversArray($value){
        $this->logo = json_encode(reset($value));
    }
}