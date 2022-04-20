<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Jury */

echo $this->title = Yii::t('jury', 'Jury');
$this->params['breadcrumbs'][] = ['label' => Yii::t('jury', 'Juries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jury-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
