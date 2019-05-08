<?php

namespace effsoft\eff\module\shop\helpers;

use effsoft\eff\EffRandom;
use effsoft\eff\module\shop\models\SkuModel;
use yii\base\Component;

class SkuNumberHelper extends Component
{

    public static function generate($number = '', $sku_id = 0)
    {
        if (empty($number)) {
            $number = date('Ymd-His-') . EffRandom::get(4);
        }
        $sku_model = SkuModel::findOne(['number' => $number]);
        if (empty($sku_model)) {
            return $number;
        }
        if(!empty($sku_id)){
            if($sku_model->id == $sku_id){
                return $number;
            }
        }
        return self::generate($number);
    }
}