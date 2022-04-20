<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Movies */

$this->title = Yii::t('items', 'Update Movies: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('items', 'Movies'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('items', 'Update');
?>
<div class="movies-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'directors'=>$directors,
        'categories'=>$categories,
        'rewards'=>$rewards
    ]) ?>

</div>
