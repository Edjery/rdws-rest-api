<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;;

/**
 * TblRegion controller for the `api` module
 */
class TblRegionController extends ActiveController
{
    public $modelClass = 'app\models\TblRegion';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['pagination'] = false;
        return $actions;
    }
}
