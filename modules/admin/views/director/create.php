<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Director */

$this->title = Yii::t('director', 'Create Director');
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('director', 'Directors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="director-create container">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
