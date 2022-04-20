<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Accforpro */

$this->title = Yii::t('app', 'Update Accforpro: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accforpros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="accforpro-update container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    $img = $model->getImage();
    echo $img->getPath();
    ?>
    <?= $this->render('_form', [
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'image',
                'value'=> Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'150px', 'width'=>'150px']), ['site/zoom'],
//                'value'=> Html::a(Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'100px', 'width'=>'100px']), ['site/zoom']),
                'format'=> ['raw'],
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
