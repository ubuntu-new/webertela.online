<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'History';
//$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';

if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
    $font_size = '28px !important';
    $font_size_small = '0.9vw !important';
    $font_size_dir = '0.5vw !important';
    $font_size_big = '3.5rem';
    $font_size_movie_title = '1.1rem !important';
    $font_size_movie_desc = '0.9rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '34px !important';
    $font_size_small = '1.3vw !important';
    $font_size_movie_title = '1.5rem !important';
    $font_size_movie_desc = '1.2rem !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem';
    $dinLight = 'bpgAlgeti !important';
}
?>
<div class="section-bg">
    <div class="row">
        <div class="col-12 px-0">
<!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 wow bounceInUp" style="animation-name: bounceInUp;">
            <?php foreach ($history as $row):?>
                <?php
                if ($lang_id == 'ka-GE'){
                    $title = $row->title_ge;
                    $description = $row->description_ge;
                }

                if ($lang_id == 'en-US'){
                    $title = $row->title;
                    $description = $row->description;
                }
                ?>
            <h1 class="mt-5" id="maintitle" style="color: #E24145 !important;font-family: <?=$font_family?>; font-size: <?=$font_size?>"><?=$title?></h1>
                <span  class="mb-3" style="font-family: <?=$dinLight?>"><?=$description?></span>
            <?php endforeach;?>
        </div>
    </div>
</div>