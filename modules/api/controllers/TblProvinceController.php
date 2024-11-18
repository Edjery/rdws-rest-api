<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;;

/**
 * TblProvince controller for the `api` module
 */
class TblProvinceController extends ActiveController
{
    public $modelClass = 'app\models\TblProvince';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['pagination'] = false;
        return $actions;
    }
}
