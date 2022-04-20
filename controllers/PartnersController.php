<?php

namespace app\controllers;
use app\models\Partners;

class PartnersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        /*$partners = Partners::find()->all();*/

        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{partners}} {{i}} 
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Partners'   order by {{m}}.[[id]] desc";



        $partners = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);




        return $this->render('index', compact('partners'));
    }

}
