<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Usfulinfo */

$this->title = Yii::t('usfulinfo', 'Create Usfulinfo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('usfulinfo', 'Usfulinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usfulinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
