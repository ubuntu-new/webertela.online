<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\NewsoldSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="newsold-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'title_ge') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description_ge') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('media', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('media', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
