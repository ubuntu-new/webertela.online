<?php

namespace app\controllers;
use app\models\Team;

class TeamController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{team}} {{i}} 
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Team'   order by {{i}}.[[id]] ASC ";



        $team = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);




        return $this->render('index', compact('team'));
    }

}
