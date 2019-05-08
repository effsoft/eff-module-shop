<?php
namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffModel;

class ItemForm extends EffModel{

    public $title;
    public $category;
    public $covers;
    public $description;

    public function rules()
    {
        return [
            ['title','required'],
            ['title','trim'],
            ['title', 'string', 'max' => 100],
            ['category','required'],
            ['covers','safe'],
            ['description','safe'],
        ];
    }
}