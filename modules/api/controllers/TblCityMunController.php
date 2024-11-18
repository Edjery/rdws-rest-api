<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;;

/**
 * TblCityMun controller for the `api` module
 */
class TblCityMunController extends ActiveController
{
    public $modelClass = 'app\models\TblCityMun';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['pagination'] = false;
        return $actions;
    }
}
