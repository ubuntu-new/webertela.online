<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Partners';
//$this->params['breadcrumbs'][] = $this->title;
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';
?>

<div class="section-bg">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>
<!--==========================
  Team Section
============================-->
<section id="team" class="section-bg container">
    <div class="row">
        <?php foreach ($partners as $row):?>
            <div class="col-lg-2 col-sm-12 wow bounceInUp" style="animation-name:  bounceInUp" data-wow-delay="0.1s">
                <div class="cardpartnerts p-1 mb-5">
                    <img class="card-img-top imageverticalcentere" src="<?=Yii::getAlias('@web').'/img/store/'.$row->filePath?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>">
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>
