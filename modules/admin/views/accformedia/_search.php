<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AccformediaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accformedia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'company') ?>

    <?= $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'companyaddress') ?>

    <?php // echo $form->field($model, 'phonefax') ?>

    <?php // echo $form->field($model, 'mobilephone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'usedphonenumber') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
