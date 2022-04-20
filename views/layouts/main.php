<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Movies;
use app\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')? $session->get('lang'): 'ka-GE';


$share_img = "http://webertela.online/img/webertela-web-developers-pace-fb-share.jpg";
$url = "http://webertela.online/";
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<meta charset="<?= Yii::$app->charset ?>">
<?php $this->registerCsrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>

<meta name="title" content="WEBERTELA Creative Web Developers Place">
<meta name="description" content="The workflow we use is based on our extensive experience and best practices in IT development.">
<meta name="keywords" content="Web; Developers; Place; Webertela; Site; Sites; Development; Freelancer; Professionals">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="10 days">
<meta name="author" content="Levan Andghuladze">

<!--  SOCIAL -->
<meta property="og:url"                content="<?=$url?>" />
<meta property="og:type"               content="Creative Web Developers' Place" />
<meta property="og:title"              content="Creative Web Developers' Place" />
<meta property="og:description"        content="The workflow we use is based on our extensive experience and best practices in WEB development." />
<meta property="og:image"              content="<?=$share_img?>" />



<?php $this->head() ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="WEBERTELA.ONLINE">
    <meta name="author" content="Max Wilson, Biological Substance, Levan Andghuladze">
    <title>WEBERTELA.ONLINE - Creative Web Developers Place</title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v6.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="468820899935642">
</div>
<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=505525060288945&autoLogAppEvents=1"></script>
<body class="theme-yellow">
<?php $this->beginBody() ?>
<div class="animsition">
    <div class="wrapper">
        <header id="header" class="header header-fixed">
            <div class="container-fluid clearfix">
                <div class="brand">
                    <a href="http://www.webertela.online/">
                        <div class="brand-name">WEBERTELA</div>
                        <div class="brand-text d-none d-md-inline">Creative Web Developers' Place</div>
                    </a>
                </div>

                <!--<button class="nav-toggle-btn a-nav-toggle">
                    <span class="nav-toggle-title">Menu</span>
              <span class="nav-toggle nav-toggle-sm">
                <span class="stick stick-1"></span>
                <span class="stick stick-2"></span>
                <span class="stick stick-3"></span>
              </span>
                </button>-->

               <!-- <div class="header-content d-none d-md-block">
                    <div class="header-contacts">
                        <div class="header-contact-item"><a href="tel:+00853462188" class="phone-link">+ 995 555 430203</a></div>
                        <div class="header-contact-divider">/</div>
                        <div class="header-contact-item"><a href="mailto:contact@webertela.online" class="mail-link">contact@webertela.online</a></div>
                    </div>
                </div>-->
            </div>

            <div class="hide-menu a-nav-toggle"></div>

            <div class="menu">
                <div class="menu-lang">
                    <a href="#" class="menu-lang-item active">Eng</a>
                    <a href="#" class="menu-lang-item">fra</a>
                    <a href="#" class="menu-lang-item">ger</a>
                </div>

                <div class="menu-main" id="accordion">
                    <ul>
                        <li class="active">
                            <a data-text="Home" data-toggle="collapse" href="http://webertela.online/" role="button" aria-expanded="true" aria-controls="menuHome">
                                Home
                            </a>
                        </li>
                        <li><a  data-toggle="collapse" href="http://webertela.online/web/works/index" >Works</a>
                            <div class="collapse" id="menuWorks" data-parent="#accordion">
                                <ul>
                                    <li><a href="work-grid.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Grid">Grid</a></li>
                                    <li><a href="work-masonry.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Masonry">Masonry</a></li>
                                    <li><a href="work-metro.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Metro">Metro</a></li>
                                    <li><a href="work-listing.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Listing">Listing</a></li>
                                    <li><a href="work-carousel.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Carousel">Carousel</a></li>
                                    <li><a href="work-parallax.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Parallax">Parallax</a></li>
                                    <li><a href="single-project-branding.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Single Project Branding">Single Project Branding</a></li>
                                    <li><a href="single-project-photography.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Single Project Photography">Single Project Photography</a></li>
                                    <li><a href="single-project-web-design.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Single Project Web Design">Single Project Web Design</a></li>
                                    <li><a href="single-project-mobile-app.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Single Project Mobile App">Single Project Mobile App</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a data-text="News" data-toggle="collapse" href="#menuNews" role="button" aria-expanded="false" aria-controls="menuNews">News</a>
                            <div class="collapse" id="menuNews" data-parent="#accordion">
                                <ul>
                                    <li><a href="news-grid.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Grid">Grid</a></li>
                                    <li><a href="news-masonry.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Masonry">Masonry</a></li>
                                    <li><a href="news-with-sidebar.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="News with sidebar">News with sidebar</a></li>
                                    <li><a href="single-post-no-sidebar.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Single Post No Sidebar">Single Post No Sidebar</a></li>
                                    <li><a href="single-post-with-sidebar.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Single Post With Sidebar">Single Post With Sidebar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a data-text="Studio" data-toggle="collapse" href="#menuStudio" role="button" aria-expanded="false" aria-controls="menuStudio">Studio</a>
                            <div class="collapse" id="menuStudio" data-parent="#accordion">
                                <ul>
                                    <li><a href="about-us.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="About Us">About Us</a></li>
                                    <li><a href="about-me.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="About Me">About Me</a></li>
                                    <li><a href="our-team.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Our team">Our team</a></li>
                                    <li><a href="career.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Career">Career</a></li>
                                    <li><a href="career-detail.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Career Detail">Career Detail</a></li>
                                    <li><a href="how-its-work.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="How its work">How its work</a></li>
                                    <li><a href="service.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Service">Service</a></li>
                                    <li><a href="coming-soon.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Coming soon">Coming soon</a></li>
                                    <li><a href="404.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Page 404">Page 404</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Contact">Contact</a></li>
                    </ul>
                </div>

                <div class="menu-footer">

                    <ul class="social social-rounded">
                        <li>&nbsp;</li>
             <!--           <li><a href="#"><i class="socicon-twitter"></i></a></li>
                        <li><a href="#"><i class="socicon-facebook"></i></a></li>
                        <li><a href="#"><i class="socicon-googleplus"></i></a></li>-->
                    </ul>

                </div>
            </div>
        </header>


        <div class="establised">Just 20 Years of experience</div>
        <div class="copyright-fixed">&copy; webertela.online /<!-- + 995 555 430203 /--> hi@webertela.online</div>


        <?= $content ?>

    </div>
    
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>