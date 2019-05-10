<?php
namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffModel;

class ItemForm extends EffModel{

    public $name;
    public $category;
    public $covers;
    public $description;

    public function rules()
    {
        return [
            ['name','required'],
            ['name','trim'],
            ['name', 'string', 'max' => 100],
            ['category','required'],
            ['covers','safe'],
            ['description','safe'],
        ];
    }
}