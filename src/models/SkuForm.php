<?php

namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffModel;

class SkuForm extends EffModel
{
    public $number;
    public $parent_id;
    public $name;
    public $covers;
    public $price;
    public $currency;
    public $inventory;

    public function rules()
    {
        return [
            ['number', 'safe'],
            ['parent_id', 'safe'],
            ['name', 'required'],
            ['name', 'trim'],
            ['name', 'string', 'max' => 20],
            ['covers', 'safe'],
            ['price', 'safe'],
            ['currency', 'safe'],
            ['inventory', 'safe'],
        ];
    }
}