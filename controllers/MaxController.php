<?php

namespace app\controllers;
use app\models\Works;


class MaxController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $sql = "SELECT * FROM works
                    WHERE visible = '1' order by id DESC limit 4 ";


        $lastworks = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);
        return $this->render('index', compact('lastworks'));
    }

}
