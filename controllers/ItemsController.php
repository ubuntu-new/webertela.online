<?php

namespace app\controllers;

use app\modules\admin\models\Director;
use app\modules\admin\models\Movies;

class ItemsController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $yearw = date("Y");


        $sql_lett= "SELECT {{m}}.*, {{img}}.[[filePath]], {{cat}}.[[title]] AS titlecat FROM {{movies}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Movies' 
                    LEFT JOIN {{categories}} {{cat}}  ON {{cat}}.[[id]] = {{m}}.[[filterletter]] 
                    WHERE {{m}}.[[year]] = $yearw  AND{{m}}.[[visible]] = '1'  
                    group by {{m}}.[[id]]
                  ";
        $letters = \Yii::$app->db->createCommand($sql_lett)->queryAll(\PDO::FETCH_OBJ);



/*        $letters = Movies::find()->where(['!=', 'filterletter', 0])->andWhere(["year"=>$yearw])->groupBy(['filterletter'])->all();*/
        /*$category = Movies::find()->groupBy(['filtercategory'])->all();*/

        $sql_cat = "SELECT {{m}}.*, {{img}}.[[filePath]], {{cat}}.[[title]] AS titlecat, {{cat}}.[[title_ge]] AS titlecat_ge FROM {{movies}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Movies' 
                    LEFT JOIN {{categories}} {{cat}}  ON {{cat}}.[[id]] = {{m}}.[[filtercategory]] 
                    WHERE {{m}}.[[year]] = $yearw  AND{{m}}.[[visible]] = '1'  
                    group by {{cat}}.[[title]]
                  ";
        $category = \Yii::$app->db->createCommand($sql_cat)->queryAll(\PDO::FETCH_OBJ);

        /*$days = Movies::find()->groupBy(['filterday'])->all();*/

        $days = Movies::find()->where(['!=', 'filterday', 0])->andWhere(["year"=>$yearw])->andWhere(["visible"=>'1'])->groupBy(['filterday'])->all();

        $sql = "SELECT {{m}}.*, {{img}}.[[filePath]], {{cat}}.[[title]] AS titlecat FROM {{movies}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Movies' 
                    LEFT JOIN {{categories}} {{cat}}  ON {{cat}}.[[id]] = {{m}}.[[filtercategory]] 
                    WHERE {{m}}.[[year]] = $yearw   AND{{m}}.[[visible]] = '1'  
                    order by {{m}}.[[id]] desc";

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

        return $this->render('index', compact('days','array','category','letters'));
    }




    public function actionSearch()
    {

        $yearw = date("Y");
        /*$letters = Movies::find()->groupBy(['filterletter'])->all();*/
        $letters = Movies::find()->where(['!=', 'filterletter', 0])->andWhere(["visible"=>'1'])->andWhere(["year"=>$yearw])->groupBy(['filterletter'])->all();
        /*$category = Movies::find()->groupBy(['filtercategory'])->all();*/
        $category = Movies::find()->where(['!=', 'filtercategory', 0])->andWhere(["visible"=>'1'])->andWhere(["year"=>$yearw])->groupBy(['filtercategory'])->all();

        /*$days = Movies::find()->groupBy(['filterday'])->all();*/
        $days = Movies::find()->where(['!=', 'filterday', 0])->andWhere(["visible"=>'1'])->andWhere(["year"=>$yearw])->groupBy(['filterday'])->all();

        $title = \Yii::$app->request->get("title");
       /* $title = $_GET["search"];*/



        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{movies}} {{i}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] AND {{m}}.[[modelName]] = 'Movies' 
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
