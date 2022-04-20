<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accforpro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accforpro-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->fileInput()?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'companyaddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phonefax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobilephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usedphonenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visible')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
