<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
$img = $model->getImage();
$img->getPath();

use dosamigos\tinymce\TinyMce;
Yii::$app->view->registerJsFile('plugins/tinymce/js/tinymce/tinymce.min.js', ['yii\web\JqueryAsset']);
Yii::$app->view->registerJs('tinymce.init({
     selector:"textarea",
     mode : "specific_textareas",
      plugins: [
       "advlist autolink lists link image charmap print preview anchor media",
       "searchreplace visualblocks code fullscreen",
       "insertdatetime media table contextmenu paste jbimages "
   ],
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages media"

})', View::POS_END);
?>

<div class="movies-search container">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_ge') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'director') ?>

    <?= $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'production') ?>

    <?php // echo $form->field($model, 'iscolored') ?>

    <?php // echo $form->field($model, 'description_ge') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'main_image') ?>

    <?php // echo $form->field($model, '_video') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'date_released') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'link_ge') ?>

    <?php // echo $form->field($model, 'link_en') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'filterday') ?>

    <?php // echo $form->field($model, 'filtercategory') ?>

    <?php // echo $form->field($model, 'filterletter') ?>

    <?php // echo $form->field($model, 'starter') ?>

    <?php // echo $form->field($model, 'closer') ?>

    <?php // echo $form->field($model, 'bestff') ?>

    <?php // echo $form->field($model, 'bestffn') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('items', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('items', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
