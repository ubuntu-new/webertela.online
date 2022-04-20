<?php

namespace app\controllers;

class UsfulinfoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{usful_info}} {{i}} 

                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]]";
        $news = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);




        return $this->render('index', compact('news'));
    }

}
