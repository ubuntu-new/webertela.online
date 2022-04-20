<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Awards */

$this->title = Yii::t('awards', 'Create Awards');
$this->params['breadcrumbs'][] = ['label' => Yii::t('awards', 'Awards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="awards-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
