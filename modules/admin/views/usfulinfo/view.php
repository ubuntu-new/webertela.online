<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Usfulinfo */

$this->title = $model->title;
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('usfulinfo', 'Usfulinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
\yii\web\YiiAsset::register($this);
?>
<div class="usfulinfo-view container">

   <!-- <h1><?/*= Html::encode($this->title) */?></h1>-->

    <p>
        <?= Html::a(Yii::t('usfulinfo', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('usfulinfo', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('usfulinfo', 'Are you sure you want to delete this item?'),
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
            'title',
            'description:ntext',
            'title_ge',
            'description_ge:ntext',
            'url:url',
            'date',
            'visible',
         /*   'position',*/
        ],
    ]) ?>

</div>
