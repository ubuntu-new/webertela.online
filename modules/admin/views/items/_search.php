<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\itemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'title_ge') ?>

    <?php // echo $form->field($model, 'description_ge') ?>

    <?php // echo $form->field($model, 'iscolored') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'director') ?>

    <?php // echo $form->field($model, 'production') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'filterday') ?>

    <?php // echo $form->field($model, 'filterletter') ?>

    <?php // echo $form->field($model, 'filtercategory') ?>

    <?php // echo $form->field($model, 'starter') ?>

    <?php // echo $form->field($model, 'closer') ?>

    <?php // echo $form->field($model, 'bestff') ?>

    <?php // echo $form->field($model, 'bestffn') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('items', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('items', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
