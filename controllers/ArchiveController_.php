<?php

namespace app\controllers;
use app\models\Items;
use app\models\Jury;
use app\models\Movies;

class ArchiveController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionItems()
    {
        $yearw = date("Y");

        $yearw =(\Yii::$app->request->get("year") !== null)?\Yii::$app->request->get("year"):$yearw;

        $active = '1';

        // delete $days = Movies::find()->where(['visible'=>1])->groupBy(['filterday'])->all();
        /*  $itemsStarter = Items::find()->where(['year'=>$yearw])->andWhere(['starter' =>'1'])->all();*/

        $year = Movies::find()->where(['visible'=>'1'])->groupBy(['year'])->all();
        $category = Movies::find()->where(['visible'=>'1'])->andWhere(['year'=>$yearw])->groupBy(['filtercategory'])->all();

        $itemsStarter_sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{movies}} {{m}} 
                             LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = {{m}}.[[id]] AND {{img}}.[[modelName]] = 'Movies' AND {{img}}.[[isMain]] = '1'  WHERE 
            {{m}}.[[year]] = :y AND {{m}}.[[starter]] = :starter";
        $itemsStarter = \Yii::$app->db->createCommand($itemsStarter_sql);

        $itemsStarter->bindParam(":y",$yearw);
        $itemsStarter->bindParam(":starter",$active);

        $itemsStarter = $itemsStarter->queryAll();



        $arrayStarter = [];

        foreach ($itemsStarter as $item)
        {
            if ($item["director"] != "") {

                $sql_doctors =  "SELECT {{d}}.*,{{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = [[d]].[[id]] AND {{img}}.[[modelName]] = 'Director' AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (".$item["director"].") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            } else
                $directors = [];

            array_push($arrayStarter, [
                "itemStarter"=>$item,
                "directors"=>$directors
            ]);
        }



        $closer_sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{movies}} {{m}} 
                             LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = {{m}}.[[id]] AND {{img}}.[[modelName]] = 'Movies' AND {{img}}.[[isMain]] = '1'  WHERE 
            {{m}}.[[year]] = :y AND {{m}}.[[closer]] = :closer";
        $itemsCloser = \Yii::$app->db->createCommand($closer_sql);

        $itemsCloser->bindParam(":y",$yearw);
        $itemsCloser->bindParam(":closer",$active);

        $itemsCloser  = $itemsCloser->queryAll();



        $arrayCloser = [];

        foreach ($itemsCloser as $item)
        {
            if ($item["director"] != "") {

                $sql_doctors =  "SELECT {{d}}.*,{{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = [[d]].[[id]] AND {{img}}.[[modelName]] = 'Director' AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (".$item["director"].") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            } else
                $directors = [];

            array_push($arrayCloser, [
                "itemCloser"=>$item,
                "directors"=>$directors
            ]);
        }




        $sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{movies}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Movies' 
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



        return $this->render('items', compact('array','arrayStarter','arrayCloser','category','year'));
    }

    public function actionItemsByYear()
    {



        $year = \Yii::$app->request->post("year");

        $active = '1';

        $itemsStarter_sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{items}} {{m}} 
                             LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = {{m}}.[[id]] WHERE 
            {{m}}.[[year]] = :y AND {{m}}.[[starter]] = :starter";
        $itemsStarter = \Yii::$app->db->createCommand($itemsStarter_sql);

        $itemsStarter->bindParam(":y",$year);
        $itemsStarter->bindParam(":starter",$active);

        $data = $itemsStarter->queryAll();

        $itemsAll_sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{items}} {{m}} 
                             LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = {{m}}.[[id]] WHERE 
            {{m}}.[[year]] = :y AND {{m}}.[[visible]] = :visible";
        $itemsAll = \Yii::$app->db->createCommand($itemsAll_sql);

        $itemsAll->bindParam(":y",$year);
        $itemsAll->bindParam(":visible",$active);

        $itemsAllData = $itemsAll->queryAll();



        return json_encode(['starter'=>$data, 'itemsAllData'=>$itemsAllData]);
    }

    public function actionJury()
    {
        /*$jury = Jury::find()->all();*/
//        $category = Items::find()->groupBy(['filtercategory'])->all();
//        $itemsCloser = Items::find()->where('closer' == '1')->all();
        $year = Jury::find()->groupBy(['year'])->all();
        $sql = "SELECT {{m}}.*,{{img}}.[[filePath]] 
                  FROM {{jury}} {{m}} 
                  LEFT JOIN {{image}} {{img}} 
                  ON {{img}}.[[itemId]] = {{m}}.[[id]] 
                  AND {{img}}.[[modelName]] = 'Jury' 
                  AND {{img}}.[[isMain]] = '1' 
                  AND {{img}}.[[isMain]] = '1'  
                  order by {{m}}.[[id]] asc ";



        $jury = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);
        return $this->render('jury', compact('jury','year'));
    }

    public function actionWinners()
    {

        $yearw = date("Y");
        $yearw =(\Yii::$app->request->get("year") !== null)?\Yii::$app->request->get("year"):$yearw;

        $t = '';

        $itemsStarter_sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{movies}} {{m}} 
                             LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = {{m}}.[[id]] and  {{img}}.[[modelName]] = 'Movies' AND {{img}}.[[isMain]] = '1'   WHERE 
            {{m}}.[[year]] = :y AND {{m}}.[[bestffn]] != :bestff";
        $itemsStarter = \Yii::$app->db->createCommand($itemsStarter_sql);
        $itemsStarter->bindParam(":y",$yearw);
        $itemsStarter->bindParam(":bestff",$t);
        $foreign = $itemsStarter->queryAll();
        $directors = [];
        $arrayForeign = [];
        foreach ($foreign as $item)
        {
            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*,{{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = [[d]].[[id]] AND {{img}}.[[modelName]] = 'Director' AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (" . $item["director"] . ") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            }
            array_push($arrayForeign, [
                "itemStarter"=>$item,
                "directors"=>$directors
            ]);
        }

        /* Best International Feautured Film by Year */
        $t = 'Best Feature Film';
        $bestInternationalFeatureSql = "SELECT {{m}}.*, {{img}}.[[filePath]] 
                                        FROM {{movies}} {{m}} 
                                        LEFT JOIN {{image}} {{img}} 
                                        ON {{img}}.[[itemId]] = {{m}}.[[id]] and  {{img}}.[[modelName]] = 'Movies' 
                                        AND {{img}}.[[isMain]] = '1'   
                                        WHERE {{m}}.[[year]] = :y 
                                        AND {{m}}.[[bestffn]] = :bestff";
        $itemsStarter = \Yii::$app->db->createCommand($bestInternationalFeatureSql);
        $itemsStarter->bindParam(":y",$yearw);
        $itemsStarter->bindParam(":bestff",$t);
        $bestInternationalFeature = $itemsStarter->queryAll();
        $directors = [];
        $arrayFeauture = [];
        foreach ($bestInternationalFeature as $item)
        {
            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*,{{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = [[d]].[[id]] AND {{img}}.[[modelName]] = 'Director' AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (" . $item["director"] . ") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            }
            array_push($arrayFeauture, [
                "itemStarter"=>$item,
                "directors"=>$directors,
                'bestInternationalFeature'=>$bestInternationalFeature
            ]);
        }

        /* Best International Best Documentary Film by Year */
        $t = 'Best Documentary Film';
        $bestInternationalDocumentarySql = "SELECT {{m}}.*, {{img}}.[[filePath]] 
                                        FROM {{movies}} {{m}} 
                                        LEFT JOIN {{image}} {{img}} 
                                        ON {{img}}.[[itemId]] = {{m}}.[[id]] and  {{img}}.[[modelName]] = 'Movies' 
                                        AND {{img}}.[[isMain]] = '1'   
                                        WHERE {{m}}.[[year]] = :y 
                                         AND {{m}}.[[bestffn]] = :bestff";
        $itemsStarter = \Yii::$app->db->createCommand($bestInternationalDocumentarySql);
        $itemsStarter->bindParam(":y",$yearw);
        $itemsStarter->bindParam(":bestff",$t);
        $bestInternationalDocumentary = $itemsStarter->queryAll();
        $directors = [];
        $arrayInternational = [];
        foreach ($bestInternationalDocumentary as $item)
        {
            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*,{{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = [[d]].[[id]] AND {{img}}.[[modelName]] = 'Director' AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (" . $item["director"] . ") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            }
            array_push($arrayInternationalDocumentary, [
                "itemStarter"=>$item,
                "directors"=>$directors,
                'bestInternationalDocumentary'=>$bestInternationalDocumentary
            ]);
        }


        $t = '';

        $itemsN_sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{movies}} {{m}} 
                             LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Movies' AND {{img}}.[[isMain]] = '1'  WHERE 
            {{m}}.[[year]] = :y  AND {{m}}.[[bestff]] != :bestffn order by {{m}}.[[id]] asc";
        $itemsN = \Yii::$app->db->createCommand($itemsN_sql);

        $itemsN->bindParam(":y",$yearw);
        $itemsN->bindParam(":bestffn",$t);

        $national = $itemsN->queryAll();


        $arrayNational = [];

        foreach ($national as $item)
        {
            if ($item["director"] != "") {
                $sql_doctors = "SELECT {{d}}.*,{{img}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{img}} ON {{img}}.[[itemId]] = [[d]].[[id]] AND {{img}}.[[modelName]] = 'Director' AND {{img}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (" . $item["director"] . ") ";
                $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);
            }
            array_push($arrayNational, [
                "itemStarter"=>$item,
                "directors"=>$directors
            ]);
        }

        $year = Movies::find()->where(['visible'=>'1'])->andWhere(['OR',
            ['!=', 'bestffn' , ''],
            ['!=', 'bestff' , '']
        ])->groupBy(['year'])->all();
        return $this->render('winners', compact('arrayForeign','arrayFeauture','arrayNational','year'));
    }
}
