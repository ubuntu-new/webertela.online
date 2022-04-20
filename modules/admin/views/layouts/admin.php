<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'en-US';
if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
    $font_size = '2.5rem !important';
    $font_size_small = '2rem !important';
    $font_size_big = '5.5rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '2.5rem !important';
    $font_size_small = '2rem !important';
    $font_size_big = '5.5rem !important';
    $dinLight = 'bpgAlgeti !important';
}
?>
<style>
    .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>ADMIN: Tbilisi International Festial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $this->registerCsrfMetaTags() ?>
    <title>ADMIN: <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">



    <!-- =======================================================
      Theme Name: Rapid
      Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>
<?php $this->beginBody() ?>
<!--==========================
Header
============================-->
<header id="header" class="mb-5">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="<?= \yii\helpers\Url::to(['history/']) ?>" class="scrollto"><span>
                        <img src="../web/img/logo.jpg" width="120">
                    </span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul class="menu_bott admin">
            <li  class="drop-down"><a href="#about" style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'About Us')?></a>
                <ul class="menu_bott">
                    <li><a href="<?= \yii\helpers\Url::to(['history/index'])?>" style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival History')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['team/index'])?>" style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival Organization Team')?></a></li>
                </ul>
            </li>

            <li  class="drop-down "><a href="<?= \yii\helpers\Url::to(['movies/']) ?>" style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival 2019')?>+</a>
                <ul class="menu_bott ">
                    <li><a href="<?= \yii\helpers\Url::to(['movies/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival 2019')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['jury/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Jury')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['awards/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Awards')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['usfulinfo/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Useful Info')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['partners/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Partners / Sponsors')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['opencal/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Open call for entries')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['director/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Directors')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['categories/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Categories')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['rewards/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Rewards')?></a></li>
                </ul>
            </li>
            <li  class="drop-down"><a href="#media" style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Media / Professionals')?></a>
                <ul class="menu_bott">
                    <li><a href="<?= \yii\helpers\Url::to(['accformediatxt/index']) ?>"  style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Accreditation TEXT for Professionals / Media')?>+</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['accformedia/']) ?>"  style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Accreditation for  Media')?>+</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['accforpro/']) ?>"  style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Accreditation for  Professionals')?>+</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['newsmedia/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival in Media')?></a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['newsold/']) ?>"style="font-family: <?=$font_family?>"><?=Yii::t('menu', 'News')?></a></li>

                </ul>
            </li>
            </ul>
        </nav><!-- .main-nav -->

    </div>




</header><!-- #header -->





<main id="main" style="margin-top: 150px;">
    <div class="wrap">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<!--==========================
  Footer
============================-->
<footer id="footer" class="section-bg">

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
