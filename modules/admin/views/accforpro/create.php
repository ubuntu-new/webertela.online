<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accforpro */

$this->title = Yii::t('app', 'Create Accforpro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accforpros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accforpro-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
