<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Movies */

$this->title = Yii::t('items', 'Create Movies');
$this->params['breadcrumbs'][] = ['label' => Yii::t('items', 'Movies'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movies-create container">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'directors'=>$directors,
        'categories'=>$categories,
        'rewards'=>$rewards
    ]) ?>

</div>
