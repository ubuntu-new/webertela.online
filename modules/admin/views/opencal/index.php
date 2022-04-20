<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OpencalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('opencal', 'Opencals');
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="opencal-index container">

   <!-- <h1><?/*= Html::encode($this->title) */?></h1>-->

    <p>
        <?= Html::a(Yii::t('opencal', 'Create Opencal'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'title_ge',
            'description_ge:ntext',
            //'visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
