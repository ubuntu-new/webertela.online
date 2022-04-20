<?php

namespace app\controllers;

use app\models\Works;

class WorksController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sql = "SELECT * FROM works
                    WHERE visible = '1' order by id DESC ";
        $works = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);


        /*$history = History::find()->where(['visble' == 1])->all();*/
//        print_r($history);
        return $this->render('index', compact('works'));
    }
    public function actionView()
    {
        $id = \Yii::$app->request->get("id");

        $sql = "SELECT * FROM works
                    WHERE visible = '1' and id = $id order by id DESC ";


        $works = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);


        /*$history = History::find()->where(['visble' == 1])->all();*/
//        print_r($history);
        return $this->render('view', compact('works'));
    }

}
