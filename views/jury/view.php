<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Jury';
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
    $font_size = '2.5rem !important';
    $font_size_small = '0.9vw !important';
    $font_size_dir = '0.5vw !important';
    $font_size_big = '5.5rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '2.5rem !important';
    $font_size_small = '1.3vw !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '5.5rem !important';
    $dinLight = 'bpgAlgeti !important';
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>
<!--==========================
  Team Section
============================-->
<section id="items" class="section-bg pt-5  min-vh-100">
    <div class="container">
<?php foreach ($jury as $row):?>
            <?php
            if ($lang_id == 'ka-GE'){
                $title = $row['title_ge'];
                $description = $row['description_ge'];
            }

            if ($lang_id == 'en-US'){
                $title = $row['title'];
                $description = $row['description'];
            }
            ?>
            <div class="row feature-item">
                <div class="col-sm-12 wow fadeInUp pt-5 pt-lg-0 jury-title">
                    <h6 style=" font-family: <?=$font_family?>; "> <?= $title?></h6>
                    <div class="row mb-3">
                    <img class="webnew card-img-top mx-left d-block img-fluid mt-3" style="max-width: 500px;"  src="<?=Yii::getAlias('@web').'/img/store/'.$row["filePath"]?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/festNoImage.jpg'?>">
                    </div>
                    <p><?= $description ?></p>

                </div>
            </div>
    <div class="row mt-5">
        <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
    </div>
<?php endforeach;?>
    </div>
</section>
