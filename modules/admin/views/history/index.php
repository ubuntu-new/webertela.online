<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\HistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="history-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php

?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'title_ge',
            'description_ge:ntext',
            //'visible',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
