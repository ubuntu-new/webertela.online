<?php

namespace app\controllers;
use app\models\Items;
use app\models\Jury;

class ArchiveController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionItems()
    {
        $yearw = date("Y");

        $yearw =(\Yii::$app->request->get("year") !== null)?\Yii::$app->request->get("year"):$yearw;
        $active = '1';

        $days = Items::find()->groupBy(['filterday'])->all();
        $category = Items::find()->groupBy(['filtercategory'])->all();
      /*  $itemsStarter = Items::find()->where(['year'=>$yearw])->andWhere(['starter' =>'1'])->all();*/
        $itemsStarter_sql = "SELECT {{i}}.*, {{m}}.[[filePath]] FROM {{items}} {{i}} 
                             LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE 
            {{i}}.[[year]] = :y AND {{i}}.[[starter]] = :starter";
        $itemsStarter = \Yii::$app->db->createCommand($itemsStarter_sql);

        $itemsStarter->bindParam(":y",$yearw);
        $itemsStarter->bindParam(":starter",$active);

        $itemsStarter = $itemsStarter->queryAll();





        $arrayStarter = [];

        foreach ($itemsStarter as $item)
        {
            $sql_doctors =  "SELECT {{d}}.*,{{m}}.[[filePath]] FROM {{director}} {{d}}
                    LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[d]].[[id]] AND {{m}}.[[modelName]] = 'Director' AND {{m}}.[[isMain]] = '1' 
                    WHERE {{d}}.[[id]] IN (".$item["director"].") ";
            $directors = \Yii::$app->db->createCommand($sql_doctors)->queryAll(\PDO::FETCH_ASSOC);

            array_push($arrayStarter, [
                "itemStarter"=>$item,
                "directors"=>$directors
            ]);
        }







        $closer_sql = "SELECT {{i}}.*, {{m}}.[[filePath]] FROM {{items}} {{i}} 
                             LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE 
            {{i}}.[[year]] = :y AND {{i}}.[[closer]] = :closer";
        $closer_cmd = \Yii::$app->db->createCommand($closer_sql);

        $closer_cmd->bindParam(":y",$yearw);
        $closer_cmd->bindParam(":closer",$active);

        $itemsCloser  = $closer_cmd->queryAll();

    /*    $itemsCloser = Items::find()->where(['year'=>$yearw])->andWhere(['closer' => '1'])->all();*/
        $year = Items::find()->groupBy(['year'])->all();
        /*  $items = Items::find()->all();*/
        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{items}} {{i}} LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE {{i}}.[[year]] = :year AND {{i}}.[[visible]] = :visible";
        $items = \Yii::$app->db->createCommand($sql)->bindValue(':year', $yearw)->bindValue(':visible', $active)->queryAll(\PDO::FETCH_OBJ);
        return $this->render('item', compact('itemsStarter','category','days','itemsStarter','itemsCloser','year'));
    }

    public function actionItemsByYear()
    {



        $year = \Yii::$app->request->post("year");

        $active = '1';

        $itemsStarter_sql = "SELECT {{i}}.*, {{m}}.[[filePath]] FROM {{items}} {{i}} 
                             LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE 
            {{i}}.[[year]] = :y AND {{i}}.[[starter]] = :starter";
        $itemsStarter = \Yii::$app->db->createCommand($itemsStarter_sql);

        $itemsStarter->bindParam(":y",$year);
        $itemsStarter->bindParam(":starter",$active);

        $data = $itemsStarter->queryAll();

        $itemsAll_sql = "SELECT {{i}}.*, {{m}}.[[filePath]] FROM {{items}} {{i}} 
                             LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE 
            {{i}}.[[year]] = :y AND {{i}}.[[visible]] = :visible";
        $itemsAll = \Yii::$app->db->createCommand($itemsAll_sql);

        $itemsAll->bindParam(":y",$year);
        $itemsAll->bindParam(":visible",$active);

        $itemsAllData = $itemsAll->queryAll();



        return json_encode(['starter'=>$data, 'itemsAllData'=>$itemsAllData]);
    }

    public function actionJury()
    {
        $jury = Jury::find()->all();
//        $category = Items::find()->groupBy(['filtercategory'])->all();
//        $itemsCloser = Items::find()->where('closer' == '1')->all();
        $year = Jury::find()->groupBy(['year'])->all();
        $sql = "SELECT {{i}}.*,{{m}}.[[filePath]] FROM {{items}} {{i}} LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]]";
        $items = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_OBJ);
        return $this->render('jury', compact('jury','year'));
    }

    public function actionWinners()
    {

        $yearw = date("Y");

        $yearw =(\Yii::$app->request->get("year") !== null)?\Yii::$app->request->get("year"):$yearw;
        $active = '1';


        $t = 2;
        $itemsStarter_sql = "SELECT {{i}}.*, {{m}}.[[filePath]] FROM {{items}} {{i}} 
                             LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE 
            {{i}}.[[year]] = :y AND LENGTH({{i}}.[[bestffn]]) > :bestff";
        $itemsStarter = \Yii::$app->db->createCommand($itemsStarter_sql);

        $itemsStarter->bindParam(":y",$yearw);
        $itemsStarter->bindParam(":bestff",$t);


        $foreign = $itemsStarter->queryAll();


        $itemsN_sql = "SELECT {{i}}.*, {{m}}.[[filePath]] FROM {{items}} {{i}} 
                             LEFT JOIN {{image}} {{m}} ON {{m}}.[[itemId]] = [[i]].[[id]] WHERE 
            {{i}}.[[year]] = :y   AND LENGTH({{i}}.[[bestffn]]) > :bestffn";
        $itemsN = \Yii::$app->db->createCommand($itemsN_sql);

        $itemsN->bindParam(":y",$yearw);
        $itemsN->bindParam(":bestffn",$t);

        $national = $itemsN->queryAll();

        $year = Items::find()->groupBy(['year'])->all();
       return $this->render('winners', compact('national','foreign','year'));
    }
}
