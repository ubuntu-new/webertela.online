<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Accformediatxt */

$this->title = Yii::t('media', 'Update Accformediatxt: {name}', [
    'name' => $model->title,
]);
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('media', 'Accformediatxts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('media', 'Update');*/
?>
<div class="accformediatxt-update">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>