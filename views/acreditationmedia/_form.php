<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Accformedia */
/* @var $form ActiveForm */
$img = $model->getImage();
$img->getPath();
?>
<div class="form">

   <!-- <?php /*$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); */?>

        <?/*= $form->field($model, 'fullname') */?>
        <?/*= $form->field($model, 'image')->fileInput()*/?>
        <?/*= $form->field($model, 'company') */?>
        <?/*= $form->field($model, 'position') */?>
        <?/*= $form->field($model, 'companyaddress') */?>
        <?/*= $form->field($model, 'phonefax') */?>
        <?/*= $form->field($model, 'mobilephone') */?>
        <?/*= $form->field($model, 'email') */?>
    
        <div class="form-group">
            <?/*= Html::submitButton('Send', ['class' => 'card-link btn btn-danger']) */?>
        </div>
    --><?php /*ActiveForm::end(); */?>

</div><!-- _form -->
