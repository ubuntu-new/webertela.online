<?php

namespace app\controllers;
use app\models\History;

class HistoryController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $sql = "SELECT * FROM history
                    WHERE visible = '1'    order by id ";


        $history = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);


        /*$history = History::find()->where(['visble' == 1])->all();*/
//        print_r($history);
        return $this->render('index', compact('history'));
    }

}
