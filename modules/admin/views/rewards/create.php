<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Rewards */

$this->title = Yii::t('items', 'Create Rewards');
$this->params['breadcrumbs'][] = ['label' => Yii::t('items', 'Rewards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rewards-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
