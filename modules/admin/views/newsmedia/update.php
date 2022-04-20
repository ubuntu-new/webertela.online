<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Newsmedia */

$this->title = Yii::t('usfulinfo', 'Update Newsmedia: {name}', [
    'name' => $model->title,
]);
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('usfulinfo', 'Newsmedia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('usfulinfo', 'Update');*/
?>
<div class="newsmedia-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
