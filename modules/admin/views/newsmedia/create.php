<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Newsmedia */

$this->title = Yii::t('usfulinfo', 'Create Newsmedia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('usfulinfo', 'Newsmedia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsmedia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
