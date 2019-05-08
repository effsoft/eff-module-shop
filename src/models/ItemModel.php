<?php
namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffActiveRecord;

class ItemModel extends EffActiveRecord{

    public static function collectionName()
    {
        return 'Item';
    }

    public function attributes()
    {
        return [
            '_id',
            'uid',
            'title',
            'category',
            'covers',
            'description',
            'skus',
            'date_created',
            'date_updated',
        ];
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if($this->isNewRecord){
                $this->date_created = $this->date_updated = time();
            }else{
                $this->date_updated = time();
            }
            return true;
        }
        return false;
    }
}