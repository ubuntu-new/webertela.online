<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewsmediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('usfulinfo', 'Newsmedia');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsmedia-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('usfulinfo', 'Create Newsmedia'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'description:ntext',
            'title_ge:ntext',
            'description_ge:ntext',
            //'visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
