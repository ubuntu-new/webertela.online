<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Accformediatxt */

$this->title = Yii::t('media', 'Create Accformediatxt');
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('media', 'Accformediatxts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="accformediatxt-create container">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
