<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Accforpro */

$this->title = $model->id;
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accforpros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
\yii\web\YiiAsset::register($this);
?>
<div class="accforpro-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
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
                /*'value'=> Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'150px', 'width'=>'150px']), ['site/zoom'],*/
//                'value'=> Html::a(Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'100px', 'width'=>'100px']), ['site/zoom']),
                'format'=> ['raw'],
                'value'=>Html::a(Html::img(Yii::getAlias('@web').'/'.$img->getPath(), [ 'target' => '_blank','alt'=>'some', 'class'=>'thing', 'height'=>'150px', 'width'=>'150px']), $img->getPath()),
            ],
            'fullname',
            'company',
            'position',
            'companyaddress',
            'phonefax',
            'mobilephone',
            'email:email',
            'usedphonenumber',
            'visible',
        ],
    ]) ?>

</div>
