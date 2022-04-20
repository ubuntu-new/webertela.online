<?php

namespace app\controllers;

use app\modules\admin\models\Director;
use app\modules\admin\models\Items;

class ItemsController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $letters = Items::find()->groupBy(['filterletter'])->all();
        $category = Items::find()->groupBy(['filtercategory'])->all();
        $yearw = date("Y");
        $days = Items::find()->groupBy(['filterday'])->all();
        $sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{items}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Items' 
                    WHERE {{m}}.[[year]] = $yearw   
                    order by {{m}}.[[id]] desc ";


        $items = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        $array =  [];

        foreach ($items as $item)

        {
            $directors = [];

            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*, {{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} 
                    ON {{img}}.[[itemId]] = {{d}}.[[id]] 
                    AND {{img}}.[[modelName]] = 'Director' 
                    AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]]  IN (" . $item["director"] . ") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            }


            array_push($array, [
                "items"=>$item,
                "directors"=>$directors
            ]);
        }

        return $this->render('index', compact('days','array','category','days','letters'));
    }




    public function actionSearch()
    {


        $letters = Items::find()->groupBy(['filterletter'])->all();
        $days = Items::find()->groupBy(['filterday'])->all();
        $category = Items::find()->groupBy(['filtercategory'])->all();

        $title = \Yii::$app->request->get("title");
       /* $title = $_GET["search"];*/



        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{items}} {{i}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Items' 
                    WHERE {{i}}.[[title]] like '%$title%' OR {{i}}.[[title_ge]] like '%$title%'    order by {{i}}.[[id]] desc ";


        $items = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);

        $array =  [];

        foreach ($items as $item)

        {
            $directors = [];

            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*, {{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} 
                    ON {{img}}.[[itemId]] = {{d}}.[[id]] 
                    AND {{img}}.[[modelName]] = 'Director' 
                    AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]]  IN (" . $item["director"] . ") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            }


            array_push($array, [
                "items"=>$item,
                "directors"=>$directors
            ]);
        }
        return $this->render('search', compact('array','category','days','letters'));
    }

}
