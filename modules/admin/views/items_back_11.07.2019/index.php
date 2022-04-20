<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\itemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('items', 'Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('items', 'Create Items'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
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
            //'iscolored',
            //'duration',
            //'director',
            //'production:ntext',
            //'country',
            //'created',
            //'visible',
            //'filterday',
            //'filterletter',
            //'filtercategory',
            //'starter',
            //'closer',
            //'bestff',
            //'bestffn',
            //'url:url',
            //'facebook',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
