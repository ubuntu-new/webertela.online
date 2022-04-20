<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accforpro */
/* @var $form ActiveForm */
?>
<div class="Accforpro">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'fullname') ?>
        <?= $form->field($model, 'company') ?>
        <?= $form->field($model, 'position') ?>
        <?= $form->field($model, 'companyaddress') ?>
        <?= $form->field($model, 'phonefax') ?>
        <?= $form->field($model, 'mobilephone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'usedphonenumber') ?>
        <?= $form->field($model, 'visible') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('forms', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Accforpro -->


