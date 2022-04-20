<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Team';
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
<!--==========================
  Team Section
============================-->
<section id="team" class="section-bg">
    <div class="container">
        <div class="section-header mb-5">
            <div id="maintitle" style="font-family: <?=$font_family?>; color:#E24145 ; font-size: 2.5rem !important; text-align: center;"><?=\Yii::t('menu','Festival Organization Team')?></div>
        </div>
        <div class="row">
            <?php foreach ($team as $team):?>
            <?php
            if ($lang_id == 'ka-GE'){
                $title = $team->title_ge;
                $description = $team->description_ge;
            }

            if ($lang_id == 'en-US'){
                $title = $team->title;
                $description = $team->description;
            }
            ?>
            <div class="col-lg-3 col-sm-12 wow bounceInUp" style="animation-name:  bounceInUp" data-wow-delay="0.1s">
                <div class="member  shadow-sm p-3 mb-5" >
                    <a>
                    <img class="img-fluid-team" src="<?=Yii::getAlias('@web').'/img/store/'.$team->filePath?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>" >
                    </a>
                    <div class="member-info">
                        <div class="member-info-content">
                            <h6 style="font-family: <?=$font_family?>; text-transform: uppercase"><?=$title?></h6>
                            <span><?=$description?></span>
                            <span><?=$team->email?></span>
                           <!-- <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section><!-- #team -->