<?php

namespace app\controllers;
use app\models\Jury;

class JuryController extends \yii\web\Controller
{
    public function actionIndex()
    {
       /* $jury = Jury::find()->all();*/
        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{jury}} {{i}} 
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Jury' AND {{m}}.[[isMain]] = '1'
                      where {{i}}.[[year]] = '2019' 
                      order by {{i}}.[[id]] asc";



        $jury = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        return $this->render('index', compact('jury'));
    }

    public function actionView($id)
    {
        $id = \Yii::$app->request->get("id");
       /* $jury = Jury::find()->all();*/
        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{jury}} {{i}} 
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Jury' AND {{m}}.[[isMain]] = '1'
                      where {{i}}.[[id]] = $id
                     ";
        $jury = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        return $this->render('view', compact('jury'));
    }
}
