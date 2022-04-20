<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Open Call for Entries';
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
    $font_size = '2rem !important';
    $dinLight = 'bpgAlgeti !important';
}

if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '2.5rem !important';
    $dinLight = 'bpgAlgeti !important';
}
?>

<div class="section-bg">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/history.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>
<div class="container" style="padding: 60px 0 40px 0;">
    <!--<div class="section-header mb-5">
        <h1  id="maintitle" style="font-family: <?/*=$font_family;*/?>"><?/*=\Yii::t('menu','Call For Entries!!!')*/?></h3>
    </div>-->
    <div class="row">
        <div class="col-sm-12 wow bounceInUp" style="animation-name: bounceInUp;">
            <?php foreach ($opencal as $row):?>
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
                <h1 class="mt-5" id="maintitle" style="font-size: 2.5rem !important;color: #E24145 !important;font-family: <?=$font_family?>; font-size: <?=$font_size?>"><?=$title?></h1>
                <span  class="mb-3" style="font-family: <?=$dinLight?>"><?=$description?></span>
            <?php endforeach;?>
        </div>
    </div>
</div>
