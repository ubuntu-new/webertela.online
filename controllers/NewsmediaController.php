<?php

namespace app\controllers;

use app\models\Newsmedia;

class NewsmediaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $newsmedia = Newsmedia::find()->all();
//        print_r($history);
        return $this->render('index', compact('newsmedia'));

    }

}
