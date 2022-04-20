<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Movies */
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

<div class="movies-form container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'image')->fileInput()->label(\Yii::t('helper','Image size: 600 X 800  , jpg, png!!!'))?>

    <?= Html::img(Yii::getAlias('@web').'/'.$img->getPath(), ['alt'=>'some', 'class'=>'thing', 'height'=>'150px', 'width'=>'150px'])?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_ge')->textarea(['rows' => 6]) ?>

    <?= Html::activeCheckboxList($model, 'director_array', \yii\helpers\ArrayHelper::map($directors, 'id', 'title')) ?>

    <?= $form->field($model, 'country')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'production')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'iscolored')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'filterday')->textInput() ?>

    <?= Html::activeRadioList($model, 'filtercategory_array', \yii\helpers\ArrayHelper::map($categories, 'id', 'title')) ?>

    <?= $form->field($model, 'filterletter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_released')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'starter')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'closer')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bestff')->dropDownList([ 'Best Feature Film' => 'Best Feature Film', 'Best Documentary' => 'Best Documentary', 'Best Short Film' => 'Best Short Film', 'Jury Special Mention' => 'Jury Special Mention', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bestffn')->dropDownList([ 'Best Feature Film' => 'Best Feature Film', 'Best Documentary' => 'Best Documentary', 'Best Short Film' => 'Best Short Film', 'Jury Special Mention' => 'Jury Special Mention', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'visible')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'author')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('movies', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
