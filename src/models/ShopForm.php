<?php
namespace effsoft\eff\module\shop\models;

use effsoft\eff\EffModel;

class ShopForm extends EffModel{

    public $name;
    public $logo;
    public $corp_name;
    public $corp_number;
    public $corp_license;
    public $corp_p_name;
    public $corp_p_number;
    public $corp_p_license;

    public function rules()
    {
        return [
            [['name','logo','corp_name','corp_number','corp_license','corp_p_name','corp_p_number','corp_p_license'],'required'],
            [['name','corp_name','corp_number','corp_p_name','corp_p_number'],'trim'],
        ];
    }
}