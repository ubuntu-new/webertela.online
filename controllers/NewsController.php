<?php

namespace app\controllers;
use app\modules\admin\models\Newsold;
use Yii;
use app\models\News;
use yii\data\Pagination;
use yii\db\Query;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $query = new Query();
        $query  ->select(['news_old.*','image.filePath as filePath'])
            ->from('news_old')
            ->join('LEFT  JOIN', 'image', 'news_old.id =image.itemId AND image.isMain = 1 AND image.modelName = "Newsold"')
            ->where(['news_old.visible'=>1 AND 'id'])
        ;


        $pages = new Pagination(['totalCount' => count($query->createCommand()->queryAll())]);

        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id' => SORT_DESC]);

        $command = $news->createCommand();
        $data = $command->queryAll(\PDO::FETCH_OBJ);


        return $this->render('index', [
            'news' => $data,
            'pages' => $pages,
        ]);
    }

}
