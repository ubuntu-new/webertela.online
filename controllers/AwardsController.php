<?php

namespace app\controllers;

use app\models\Awards;

class AwardsController extends \yii\web\Controller
{
    public function actionIndex()
    {


       /* $awards = Awards::find()->all();*/


        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{awards}} {{i}} 
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Awards'   order by {{i}}.[[id]] ASC ";



        $awards = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);

        return $this->render('index', compact('awards'));
    }

}
