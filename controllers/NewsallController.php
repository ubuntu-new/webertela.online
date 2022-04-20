<?php

namespace app\controllers;
use app\modules\admin\models\Newsold;
class NewsallController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $id = \Yii::$app->request->get("id");

        /*$newsall = Newsold::findOne($id);*/
        /*$newsall = Newsold::find()->where(['id' => $id])->one();*/

        $sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{news_old}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Newsold' 
                    WHERE {{m}}.[[id]] = $id   
                   ";


        $newsall = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        /*$sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{news_old}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Newsold' 
                    WHERE {{m}}.[[id]] = $id";*/
        /*$newsall = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);*/





        return $this->render('index', [
            'newsall' => $newsall,
        ]);
    }

}
