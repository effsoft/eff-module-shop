<?php
namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffActiveRecord;

class ShopModel extends EffActiveRecord{

    public static function collectionName()
    {
        return 'Shop';
    }

    public function attributes()
    {
        return ['_id',
            'uid',
            'name',
            'logo',
            'corp_name',
            'corp_number',
            'corp_license',
            'corp_p_name',
            'corp_p_number',
            'corp_p_license',
            'date_created',
            'date_updated'
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