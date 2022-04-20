<?php

namespace app\controllers;

use app\models\Opencal;

class OpencalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $opencal = Opencal::find()->all();
//        print_r($history);
        return $this->render('index', compact('opencal'));
    }

}
