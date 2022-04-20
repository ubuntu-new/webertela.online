<?php

namespace app\controllers;

use app\modules\admin\models\Director;
use app\modules\admin\models\Items;

class ItemsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $letters = Items::find()->groupBy(['filterletter'])->all();
        $days = Items::find()->groupBy(['filterday'])->all();
        $category = Items::find()->groupBy(['filtercategory'])->all();
      /*  $items = Items::find()->all();*/








        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{items}} {{i}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Items' 
                    WHERE {{i}}.[[year]] = '2019'    order by {{i}}.[[id]] desc ";


        $items = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        $array = [];

        foreach ($items as $item)
        {
            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*,{{m}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[d]].[[id]] AND {{m}}.[[modelName]] = 'Director' AND {{m}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (" . $item["director"] . ") ";

            }
            $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);

            array_push($array, [
                "items"=>$item,
                "directors"=>$directors
            ]);
        }
        return $this->render('index', compact('array','category','days','letters'));
    }

    public function actionSearch()
    {


        $letters = Items::find()->groupBy(['filterletter'])->all();
        $days = Items::find()->groupBy(['filterday'])->all();
        $category = Items::find()->groupBy(['filtercategory'])->all();

        $title ='MAN';



        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{items}} {{i}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Items' 
                    WHERE {{i}}.[[title]] like '%$title%' OR {{i}}.[[title_ge]] like '%$title%'    order by {{i}}.[[id]] desc ";


        $items = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        $array = [];

        foreach ($items as $item)
        {
            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*,{{m}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[d]].[[id]] AND {{m}}.[[modelName]] = 'Director' AND {{m}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (" . $item["director"] . ") ";

            }
            $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);

            array_push($array, [
                "items"=>$item,
                "directors"=>$directors
            ]);
        }
        return $this->render('search', compact('array','category','days','letters'));
    }

}
