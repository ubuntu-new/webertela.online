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
<style>

</style>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')? $session->get('lang'): 'ka-GE';


$share_img = 'https://tbilisifilmfestival.ge/web/img/intro-bg-3.jpg';
$url= '';
if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}

if (isset($_GET["film_id"])) {
    $sql = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{movies}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Movies' 
                    WHERE {{m}}.[[id]] = ".$_GET['film_id']." ";
    $items_share = \Yii::$app->db->createCommand($sql)->queryOne(\PDO::FETCH_ASSOC);
}
if (isset($_GET["cat"]) and $_GET["cat"] == 'jury') {
    $jury_share = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{jury}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Jury'
                    WHERE {{m}}.[[id]] = ".$_GET['id']." ";
    $jury_share = \Yii::$app->db->createCommand($jury_share)->queryOne(\PDO::FETCH_ASSOC);
}
if (isset($_GET["cat"]) and $_GET["cat"]== 'news') {
    $news_share = "SELECT {{m}}.*, {{img}}.[[filePath]] FROM {{news_old}} {{m}}
                    LEFT JOIN {{image}} {{img}}  ON {{img}}.[[itemId]] = {{m}}.[[id]]  AND {{img}}.[[modelName]] = 'Newsold' 
                    WHERE {{m}}.[[id]] = ".$_GET['id']." ";
    $news_share = \Yii::$app->db->createCommand($news_share)->queryOne(\PDO::FETCH_ASSOC);
}



if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
    $font_size = '15px';
    $socType = 'თბილისის საერთაშორისო კინო ფესტივალი';
    $socTitle = 'თბილისის საერთაშორისო კინო ფესტივალი';
    $socDescription = 'თბილისის საერთაშორისო კინოფესტივალი 2000 წელს დაარსდა. პირველი ორი წლის განმავლობაში ის ხელოვნების ფესტივალის "საჩუქრის" ფარგლებში ტარდებოდა, რომელსაც ბევრი სპონსორი და მხარდამჭერი ჰყავდა და, შესაბამისად, კინოფესტივალის პროგრამაც ძალზე მრავალფეროვანი და საინტერესო იყო. 2002 წელს "საჩუქარს" დახურვის საფრთხე დაემუქრა, ამიტომ რამდენიმე თანამოაზრემ (გაგა ჩხეიძე, ნინო ანჯაფარიძე, ლაშა ბაქრაძე, დავით ბუხრიკიძე, ბესიკ დანელია, გუგა კოტეტიშვილი, გაგა ლომიძე, გიორგი ყაჯრიშვილი) კინოხელოვნების ცენტრი "პრომეთე" დააარსა, რომლის საქმიანობის მთავარი მიზანი, სხვა პროექტების განხორციელების გარდა, თბილისის საერთაშორისო კინოფესტივალის შენარჩუნება იყო. 2002 წელს კინოხელოვნების ცენტრმა "პრომეთემ" კინოფესტივალი დამოუკიდებლად, მწირი ფინანსებით ჩაატარა. დროთა განმავლობაში "პრომეთემ" თავისი საქმიანობით სახელმწიფო სტრუქტურების დაინტერესებაც შეძლო. 2004 წელს თბილისის საერთაშორისო კინოფესტივალი კერძო სპონსორებთან ერთად საქართველოს კინემატოგრაფიის ეროვნულმა ცენტრმა დააფინანსა, მომდევნო წლებში კინოცენტრს თბილისის მერია და კულტურის სამინისტროც შეუერთდა. კინოფესტივალის მთავარი მიზანია, მაყურებელს გააცნოს მსოფლიო და ქართული კინემატოგრაფიის ახალი, მაღალი მხატვრული ღირებულების მქონე ნამუშევრები, მსოფლიო კინოს ახალი ტენდენციები და ხელი შეუწყოს ქართული კინოინდუსტრიის განვითარებას. პროფესიული შეხვედრები, უორკშოპები, მასტერკლასები, რეტროსპექტივები და სხვა ინდუსტრიული ღონისძიებები, რომლებიც ყოველწლიურად იმართება ფესტივალის ფარგლებში, სტიმულს აძლევს ახალგაზრდა კინემატოგრაფისტების ნიჭისა და შემოქმედებითი ხედვის განვითარებას. ჩვენ ვისწრაფით, რომ კინოფესტივალი სამხრეთ კავკასიაში რეჟისორების, პროდიუსერების, გაყიდვების აგენტებისა და დისტრიბუტორების თავშეყრის ადგილი გახდეს. თავისი არსებობის მანძილზე ფესტივალმა საერთაშორისო მასშტაბით დიდი მნიშვნელობა შეიძინა. წლიდან წლამდე მატულობს ფესტივალზე ფილმის წარდგენისა და მონაწილეობის მსურველთა რაოდენობა.';
    $contactinfo = '+995 322 35 67 60 | office@tbilisifilmfestival.ge | დავით აღმაშენებლის გამზირი 164';
    if (isset($_GET["film_id"])) {
        $socType = $socTitle;
        $socDescription = $items_share["description_ge"];
        $share_img = "https://tbilisifilmfestival.ge/web/img/store/" . $items_share["filePath"];
    }
    if (isset($_GET["cat"])  and $_GET["cat"] == "jury") {
        $url = "https://tbilisifilmfestival.ge/web/index.php?r=jury/view&id=" . $_GET["id"]."&cat=jury";
        $socType =htmlspecialchars($jury_share["title_ge"]);
        $socDescription = htmlspecialchars($jury_share["description_ge"]);
        $share_img = "https://tbilisifilmfestival.ge/web/img/store/" . $jury_share["filePath"];
    }
    if (isset($_GET["cat"]) and $_GET["cat"] == "news") {
        $url = "https://tbilisifilmfestival.ge/web/index.php?r=newsall%2Findex&id=" . $_GET["id"]."&cat=news";
        $socType = htmlspecialchars($news_share["title_ge"]);
        $socDescription = htmlspecialchars($news_share["description_ge"]);
        $share_img = "https://tbilisifilmfestival.ge/web/img/store/" . $news_share["filePath"];
    }
}

if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '18px';
    $socType = 'Tbilisi International Film Festival';
    $socTitle = 'Tbilisi International Film Festival';
    $socDescription = 'Tbilisi International Film Festival was first established in 2000. The festival was born within a larger art festival framework entitled Gift, which carried numerous supporters and sponsors. Consequently, the festival at that time was able to have an interesting and diverse program. Faced by the threat of closure in 2002, a circle of friends and co-thinkers (Gaga Chkheidze, Nino Anjaparidze, Lasha Bakradze, Davit Bukhrikidze, Besik Danelia, Guga Kotetishvili, Gaga Lomidze and Giorgi Kajrishvili) decided to set up the Cinema Art Center, Prometheus to maintain the festival alongside the coordination of other projects. In spite of scarce financial resources, the 2002 festival went on to be held by the Cinema Art Center, Prometheus.';
    $contactinfo = '+995 322 35 67 60 | office@tbilisifilmfestival.ge | 164 David Aghmashenebeli Avenue';
    if (isset($_GET["film_id"])) {
        $socTitle = htmlspecialchars($items_share["title"]);
        $socDescription = htmlspecialchars($items_share["description"]);
        $share_img = "https://tbilisifilmfestival.ge/web/img/store/" . $items_share["filePath"];
    }
    if (isset($_GET["cat"])  and $_GET["cat"] == "jury") {
        $url = "https://tbilisifilmfestival.ge/web/index.php?r=jury/view&id=" . $_GET["id"]."&cat=jury";
        $socType = htmlspecialchars($jury_share["title"]);
        $socDescription = htmlspecialchars($jury_share["description"]);
        $share_img = "https://tbilisifilmfestival.ge/web/img/store/" . $jury_share["filePath"];
    }
    if (isset($_GET["cat"])  and $_GET["cat"] == "news") {
        $url = "https://tbilisifilmfestival.ge/web/index.php?r=newsall%2Findex&id=" . $_GET["id"]."&cat=news";
        $socTitle = htmlspecialchars($news_share["title"]);
        $socDescription = htmlspecialchars($news_share["description"]);
        $share_img = "https://tbilisifilmfestival.ge/web/img/store/" . $news_share["filePath"];
    }
}




//if (isset($_REQUEST['lang_id'])){
//    $lang_id = $_REQUEST['lang_id'];
//}
//debug($lang);
//debug($lang_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153070967-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153070967-1');
    </script>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>Tbilisi International Film Festival</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!--  SOCIAL -->
    <meta property="og:url"                content="<?=$url?>" />
    <meta property="og:type"               content="<?=$socType?>" />
    <meta property="og:title"              content="<?=$socType?>" />
    <meta property="og:description"        content="<?=$socDescription?>" />
    <meta property="og:image"              content="<?=$share_img?>" />
    <!--  .SOCIAL -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
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
<style>
   .alertiza
   {
       position: absolute;
       left: 0;
       top: 100px;
       width: 100vw;
       height: 100px;
       background-color: rgba(40, 42, 41, 0.8);
       display: none;
       text-align: center;
       line-height: 100px;
       font-size: 24px;
       color: #666 !important;
   }
    .alertizanone
    {
        display: none !important;
    }

   /*

  Styles for animated modal
  =========================

  */

   /* Start state */
   .animated-modall {
       max-width: 60vw;
       max-height: 30vw;
       border-radius: 0px;
       overflow: hidden;
       background: linear-gradient(45deg, #E24146 32%, #F6846C 100%);

       transform: translateY(-80px);
       transition: all .5s; /* Should match `data-animation-duration` parameter */
   }

   .animated-modall * {
       color: #fff;
   }

   .animated-modall h2,
   .animated-modall p {
       transform: translateY(-40px);
       opacity: 0;

       transition-property: transform, opacity;
       transition-duration: .3s;
   }

   /* Final state */
   .fancybox-slide--current .animated-modal,
   .fancybox-slide--current .animated-modall h2,
   .fancybox-slide--current .animated-modall p {
       transform: translateY(0);
       opacity: 1;

       transition-duration: .3s;
   }

   /* Reveal content with different delays */
   .fancybox-slide--current .animated-modall h2 {
       transition-delay: .1s;
   }

   .fancybox-slide--current .animated-modall p {
       transition-delay: .4s;
   }

   .fancybox-slide--current .animated-modal p:first-of-type {
       transition-delay: .2s;
</style>
<body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : 'your-app-id',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v5.0'
        });
    };
</script>

<?php $this->beginBody() ?>
<!--==========================
Header
============================-->
<header id="header">
    <!--<div id="alertiza" class="alertiza" style="display: block; "><?/*= Yii::t('main','Site is under construction')*/?></div>-->
    <div class="container-fluid">
        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!--<h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1>-->
            <a href="<?= \yii\helpers\Url::to(['max/index']) ?>" class="scrollto"><img src="<?=Yii::getAlias('@web') ?>/img/logo.jpg" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-left d-none d-lg-block "  style="">
            <ul>
                <li  class="drop-down"><a href="#about" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'About Us')?></a>
                    <ul class="menu_bott">
                        <li><a href="<?= \yii\helpers\Url::to(['history/index'])?>" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival History')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['team/index'])?>" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival Organization Team')?></a></li>
                        <li><a  data-fancybox data-animation-duration="500" data-src="#animatedModal" href="javascript:;" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Contact Us')?></a></li>
                        <div style="display: none;" id="animatedModal" class="animated-modall text-center p-5">
                           <div class="container">
                               <div class="row">
                               <div class="col-sm-12">
                                   <span>
                                       <?=$contactinfo?>
                                   </span>
                               </div>
                               </div>
                           </div>
                        </div>




                    </ul>
                </li>
                <li><a href="<?= \yii\helpers\Url::to(['news/index']) ?>" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'News')?></a></li>
                <li  class="drop-down"><a href="<?= \yii\helpers\Url::to(['items/index']) ?>" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival 2019')?></a>
                    <ul class="menu_bott ">
                        <!--<li class="w-100"><a href="#" >ფილმების რეგისტრაცია</a></li>-->
                        <!--<li><a href="#" >რეგლამენტი</a></li>-->
                        <!--<li><a href="#" ><?/*=Yii::t('menu', 'Useful Info')*/?>ფესტივალის სექციები</a></li>-->
                        <li><a href="<?= \yii\helpers\Url::to(['items/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival 2019')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['jury/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Jury')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['awards/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Awards')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['usfulinfo/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Useful Info')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['partners/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Partners / Sponsors')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['opencal/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Open call for entries')?></a></li>
                    </ul>
                </li>
                <li  class="drop-down"><a href="#media" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Media / Professionals')?></a>
                    <ul class="menu_bott">
                        <li><a href="<?= \yii\helpers\Url::to(['acreditationprofessionals/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Accreditation for Film Professionals')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['acreditationmedia/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Accreditation for Media')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['newsmedia/index']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Festival in Media')?> </a></li>
                    </ul>
                </li>
                <li  class="drop-down"><a href="#" style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Archive')?> </a>
                    <ul class="menu_bott">
                        <li><a href="<?= \yii\helpers\Url::to(['archive/items']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Films')?></a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['archive/jury']) ?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Jury')?></a></li>
                        <li><a href="#<?/*= \yii\helpers\Url::to(['archive/winners']) */?>"  style="font-size: <?=$font_size?>;font-family: <?=$font_family?>"><?=Yii::t('menu', 'Winners')?> </a></li>
                    </ul>
                </li>


                <!--                <li class="drop-down"><a href="">Drop Down</a>-->
                <!--                    <ul class="menu_bott">-->
                <!--                        <li><a href="#services">Services</a></li>-->
                <!--                        <li><a href="#portfolio">Portfolio</a></li>-->
                <!--                        <li><a href="#team">Team</a></li>-->
                <!--                        <li class="drop-down" style=""><a href="#">Drop Down 2</a>-->
                <!--                            <ul>-->
                <!--                                <li><a href="#services">Services</a></li>-->
                <!--                                <li><a href="#portfolio">Portfolio</a></li>-->
                <!--                                <li><a href="#team">Team</a></li>-->
                <!--                            </ul>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </li>-->

                <li class="menurespon">
                    <a href="#search" data-toggle="search-form" style="font-size: <?=$font_size?>;font-size: 22px">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </li>
                <li style="float: left;"><a style="font-size: <?=$font_size?>;color:#E24145;font-family: <?=$font_family?>" href="<?= \yii\helpers\Url::to(['site/language', 'lang' => 'en-US', 'lang_id' => 'en-US']) ?>">EN</a></li>
                <li><a style="font-size: <?=$font_size?>;color:#F4856B;font-family: <?=$font_family?>" href="<?= \yii\helpers\Url::to(['site/language', 'lang' => 'ka-GE', 'lang_id' => 'ka-GE']) ?>">GE</a></li>

            </ul>
            <div class="serch_container search-form-wrapper">
                <?php
                $form = ActiveForm::begin([
                    'action' => Url::to(['items/search']),
                    'method' => 'get'
                ]);
              echo  Html::input('text','title','',['class'=>'search form-control border-0']);
            /* echo   Html::input('text','','',['class'=>'form-control']);*/
              /*  $form->field($modeles gachedavs ki da arc vici ra unda qna :):D, 'search')->textInput(['maxlength' => true]);*/
                echo Html::submitButton('Find', ['class' => 'btn btn-primary']);
                ActiveForm::end();
                ?>
            </div>


        </nav><!-- .main-nav -->

    </div>


</header><!-- #header -->





<main id="main">
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
<footer id="footer" class="section-bg clearfix">
    <!--<div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="footer-info">
                                <h3>Rapid</h3>
                                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                            </div>

                            <div class="footer-newsletter">
                                <h4>Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit"  value="Subscribe">
                                </form>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Terms of service</a></li>
                                    <?php
/*                                    if(Yii::$app->user->isGuest){
                                        echo '<a href="?r=admin">Log in</a>';
                                    } else{
                                        echo '<li>'.Html::beginForm(['/site/logout'], 'post'),
                                        Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')',
                                            ['class' => 'btn btn-link logout']
                                        ),
                                            Html::endForm().'</li>';
                                    }
                                    */?>

                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>Contact Us</h4>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Send us a message</h4>
                        <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>

                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div>

                </div>



            </div>

        </div>
    </div>-->

    <div class="container">

        <div class="copyright" style="color:#ffffff">
            &copy; Copyright <strong>Tbilisi Film Festival</strong>. All Rights Reserved
        </div>
        <div class="credits pb-3">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
            -->
            Designed by <a href="http://istudiolab.ge/" target="_blank" style="color: #ffffff">iStudiolab</a>
        </div>
        <div class="fb-like" data-href="https://tbilisifilmfestival.ge/" data-width="320px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div>

</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
 <!--<div id="preloader"></div>-->


<?php $this->endBody() ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ddb97f0ff3c2818"></script>
</body>
</html>
<?php $this->endPage() ?>
