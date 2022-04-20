<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Newsold */

/*$this->title = Yii::t('media', 'Create Newsold');
$this->params['breadcrumbs'][] = ['label' => Yii::t('media', 'Newsolds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="newsold-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
