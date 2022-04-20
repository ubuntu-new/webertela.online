<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('opencal', 'Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('opencal', 'Create Items'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'img',
            'title',
            'description:ntext',
            'title_ge',
            //'description_ge:ntext',
            //'studio:ntext',
            //'director',
            //'email:email',
            //'directed:ntext',
            //'country',
            //'created',
            //'visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
