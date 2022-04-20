<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Opencal */

$this->title = Yii::t('opencal', 'Create Opencal');
$this->params['breadcrumbs'][] = ['label' => Yii::t('opencal', 'Opencals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opencal-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
