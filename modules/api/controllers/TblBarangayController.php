<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;;

/**
 * TblBarangay controller for the `api` module
 */
class TblBarangayController extends ActiveController
{
    public $modelClass = 'app\models\TblBarangay';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['pagination'] = false;
        return $actions;
    }
}
