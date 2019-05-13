<?php
namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffActiveRecord;
use effsoft\eff\EffMysqlActiveRecord;

class ItemModel extends EffMysqlActiveRecord {

//    public static function collectionName()
//    {
//        return 'Item';
//    }

    public static function tableName()
    {
        return 'item';
    }

    public function attributes()
    {
        return [
            'id',
            'uid',
            'shop_id',
            'name',
            'category',
            'covers',
            'description',
            'skus',
            'date_created',
            'date_updated',
        ];
    }

    public function getCoversArray(){
        return json_decode($this->covers,true);
    }

    public function setCoversArray($value){
        $this->logo = json_encode(reset($value));
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