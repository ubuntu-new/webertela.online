<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewsoldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('media', 'Newsolds');
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="newsold-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('media', 'Create Newsold'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'position',
            'title_ge',
            'title',
            'description_ge:ntext',
            //'description:ntext',
            //'img',
            //'date',
            //'year',
            //'visible',
            //'author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
