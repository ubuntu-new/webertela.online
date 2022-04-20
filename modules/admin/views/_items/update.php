<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Items */

$this->title = Yii::t('opencal', 'Update Items: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('opencal', 'Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('opencal', 'Update');
?>
<div class="items-update container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    $img = $model->getImage();
    $img->getPath();
    ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
