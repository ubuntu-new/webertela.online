<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Movies */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('items', 'Movies'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="movies-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('items', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('items', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('items', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
    $img = $model->getImage();
    $img->getPath();
    ?>
    <?= DetailView::widget([
        'model' => $model,

        'attributes' => [
            'id',
            [
                'attribute'=>'image',
                'value'=> Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'150px', 'width'=>'150px']), ['site/zoom'],
//                'value'=> Html::a(Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'100px', 'width'=>'100px']), ['site/zoom']),
                'format'=> ['raw'],
            ],
            'title_ge',
            'title',
            'director',
            'duration',
            'production:ntext',
            'iscolored',
            'description_ge:ntext',
            'description:ntext',
           /* 'image',*/
            'main_image',
            '_video',
            'date',
            'date_released',
            'year',
            'link_ge',
            'link_en',
            'time',
            'filterday',
            'filtercategory',
            'filterletter',
            'starter',
            'closer',
            'bestff',
            'bestffn',
            'section',
            'country',
            'visible',
            'author',
        ],
    ]) ?>

</div>
