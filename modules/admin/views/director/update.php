<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Director */

$this->title = Yii::t('director', 'Update Director: {name}', [
    'name' => $model->title,
]);
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('director', 'Directors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('director', 'Update')*/;
?>
<div class="director-update container">

   <!-- <h1><?/*= Html::encode($this->title) */?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,

    ]) ?>

</div>
