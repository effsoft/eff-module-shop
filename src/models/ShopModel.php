<?php

namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffActiveRecord;
use effsoft\eff\EffMysqlActiveRecord;

class ShopModel extends EffMysqlActiveRecord
{

//    public static function collectionName()
//    {
//        return 'Shop';
//    }

    public static function tableName()
    {
        return 'shop';
    }


    public function attributes()
    {
        return [
            'id',
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

    public function getLogoArray(){
        return json_decode($this->logo,true);
    }

    public function setLogoArray($value){
        $this->logo = json_encode(reset($value));
    }

    public function getCorpLicenseArray(){
        return json_decode($this->corp_license,true);
    }

    public function setCorpLicenseArray($value){
        $this->corp_license = json_encode($value);
    }

    public function getCorpPLicenseArray(){
        return json_decode($this->corp_p_license,true);
    }

    public function setCorpPLicenseArray($value){
        $this->corp_p_license = json_encode($value);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->date_created = $this->date_updated = time();
            } else {
                $this->date_updated = time();
            }
            return true;
        }
        return false;
    }
}