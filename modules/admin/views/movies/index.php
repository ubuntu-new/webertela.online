<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MoviesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('items', 'Movies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('items', 'Create Movies'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ge',
            'title',
            'director',
            'duration',
            //'production:ntext',
            //'iscolored',
            //'description_ge:ntext',
            //'description:ntext',
            //'image',
            //'main_image',
            //'_video',
            //'date',
            //'date_released',
            //'year',
            //'link_ge',
            //'link_en',
            //'time',
            //'filterday',
            //'filtercategory',
            //'filterletter',
            //'starter',
            //'closer',
            //'bestff',
            //'bestffn',
            //'section',
            //'country',
            //'visible',
            //'author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
