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
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<meta charset="<?= Yii::$app->charset ?>">
<?php $this->registerCsrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="WEBERTELA.ONLINE">
    <meta name="author" content="Max Wilson, Biological Substance">

    <title>WEBERTELA.ONLINE - Creative Web Developers Place</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="theme-orange dark-horizontal">
<?php $this->beginBody() ?>
<div class="animsition">
    <div class="wrapper">
        <header id="header" class="header header-fixed">
            <div class="container-fluid clearfix">
                <div class="brand">
                    <a href="#">
                        <div class="brand-name text-texture">LW</div>
                        <img src="main.php ">
                        <div class="brand-text">Crafting Digital<br /> Studio</div>
                    </a>
                </div>

                <button class="nav-toggle-btn a-nav-toggle">
                    <span class="nav-toggle-title">Menu</span>
              <span class="nav-toggle nav-toggle-sm">
                <span class="stick stick-1"></span>
                <span class="stick stick-2"></span>
                <span class="stick stick-3"></span>
              </span>
                </button>

                <div class="header-content d-none d-md-block">
                    <div class="header-contacts">
                        <div class="header-contact-item"><a href="tel:+00853462188" class="phone-link">+0085 346 2188</a></div>
                        <div class="header-contact-divider">/</div>
                        <div class="header-contact-item"><a href="mailto:contact@lewisstudio.com" class="mail-link">contact@lewisstudio.com</a></div>
                    </div>
                </div>
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
                        <li class="active"><a data-text="Home" data-toggle="collapse" href="#menuHome" role="button" aria-expanded="true" aria-controls="menuHome">Home</a>
                            <div class="collapse show" id="menuHome" data-parent="#accordion">
                                <ul>
                                    <li><a href="home-flash.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Flash">Flash</a></li>
                                    <li class="active"><a href="home-horizontal.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Parallax Horizontal">Parallax Horizontal</a></li>
                                    <li><a href="home-minimal.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Minimal">Minimal</a></li>
                                    <li><a href="home-zoom.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Zoom Parallax Image">Zoom Parallax Image</a></li>
                                    <li><a href="home-3d.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="3D Parallax">3D Parallax</a></li>
                                    <li><a href="home-video.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Video Background">Video Background</a></li>
                                    <li><a href="home-piling.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Parallax Piling">Parallax Piling</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a data-text="Works" data-toggle="collapse" href="#menuWorks" role="button" aria-expanded="false" aria-controls="menuWorks">Works</a>
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
                        <li><a href="#"><i class="socicon-twitter"></i></a></li>
                        <li><a href="#"><i class="socicon-facebook"></i></a></li>
                        <li><a href="#"><i class="socicon-googleplus"></i></a></li>
                    </ul>
                    <div class="menu-copyright">&copy; 2019 <strong>LEWIS</strong>. All Rights Reserved.<br /> design by <strong>Logancee</strong></div>
                </div>
            </div>
        </header>


        <ul class="social social-fixed">
            <li><a href="#"><i class="socicon-twitter"></i></a></li>
            <li><a href="#"><i class="socicon-facebook"></i></a></li>
            <li><a href="#"><i class="socicon-googleplus"></i></a></li>
        </ul>
        <div class="horizontal-nav">
            <div class="container">
                <ul id="menu">
                    <li data-menuanchor="Home" class="active"></li>
                    <li data-menuanchor="Services"></li>
                    <li data-menuanchor="Projects"></li>
                    <li data-menuanchor="Clients"></li>
                    <li data-menuanchor="Contacts"></li>
                </ul>
            </div>
            <div class="horizontal-controls">
                <button class="a-pp-prev">prev</button>
                <span class="divider">|</span>
                <button class="a-pp-next">next</button>
            </div>
        </div>

        <?= $content ?>



    </div>
</div>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script>
    $(document).ready(function() {
        $('.a-horizontal').pagepiling({
            scrollingSpeed: 280,
            menu: '#menu',
            direction: 'horizontal',
            loopTop: true,
            loopBottom: true,
            anchors: ['Home', 'Services', 'Projects', 'Clients', 'Contacts'],
            navigation: false,
            afterLoad: function(anchorLink, index){
                if(index == 1 || index == 3 || index == 5){ // Section with dark bacgkrounds
                    $('body').addClass('dark-horizontal');
                }
                else{
                    $('body').removeClass('dark-horizontal');
                }
            }
        });

        $('.a-pp-prev').on('click', function(){
            $.fn.pagepiling.moveSectionUp();
        });
        $('.a-pp-next').on('click', function(){
            $.fn.pagepiling.moveSectionDown();
        });
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
