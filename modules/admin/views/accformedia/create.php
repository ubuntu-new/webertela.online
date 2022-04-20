<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accformedia */

$this->title = Yii::t('app', 'Create Accformedia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accformedia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accformedia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
