<?php
/* @var $this yii\web\View */
?>
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';


if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
    $font_size = '4vh !important';
    $font_size_small = '0.9vw !important';
    $font_size_dir = '0.5vw !important';
    $font_size_big = '3.5rem';
    $font_size_movie_title = '1.1rem !important';
    $font_size_movie_desc = '0.9rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '7vh !important';
    $font_size_small = '1.3vw !important';
    $font_size_movie_title = '1.5rem !important';
    $font_size_movie_desc = '1.2rem !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem';
    $dinLight = 'bpgAlgeti !important';
}
?>
<!--==========================
  Intro Section
============================-->
<section id="items" class="clearfix">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 110px">
        <!--<ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>-->
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" >
                <img class="image_full" src="<?= Yii::getAlias('@web') . '/img/intro-bg.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <img class="image_mobile" src="<?= Yii::getAlias('@web') . '/img/mobile.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <img class="image_desc" src="<?= Yii::getAlias('@web') . '/img/desc.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
            </div>
            <div class="carousel-item ">
                <img class="image_full" src="<?= Yii::getAlias('@web') . '/img/intro-bg-2.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <img class="image_mobile" src="<?= Yii::getAlias('@web') . '/img/mobile1.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <img class="image_desc" src="<?= Yii::getAlias('@web') . '/img/desc-2.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <!--<div class="carousel-caption d-block text-right  h-100">
                    <div class="container-fluid h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-3 offset-md-8">
                                <h1 class="text-left  header-1-title  wow animated bounceInUp " data-wow-duration="1.4s">Tbilisi<br>International<br>Film<br>Festival<br><p class="wow animated rollIn" data-wow-duration=2.5s" style="font-size: 240px; margin-top: 50px; color: #E14145">20</p></h1>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="carousel-item ">
                <img class="image_full" src="<?= Yii::getAlias('@web') . '/img/intro-bg-3.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <img class="image_mobile" src="<?= Yii::getAlias('@web') . '/img/mobile2.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                <img class="image_desc" src="<?= Yii::getAlias('@web') . '/img/desc-3.jpg' ?>" onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
               <!-- <div class="carousel-caption d-block text-right  h-100">
                    <div class="container-fluid h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-3 offset-md-8">
                                <h1 class="text-left  header-1-title  wow animated bounceInUp " data-wow-duration="1.4s">Tbilisi<br>International<br>Film<br>Festival<br><p class="wow animated rollIn" data-wow-duration=2.5s" style="font-size: 240px; margin-top: 50px; color: #E14145">20</p></h1>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!---->
    <!---->
    <!--    <div class="container-fluid h-100">-->
    <!--        <div class="row align-items-center h-100">-->
    <!--            <div class="col-md-3 offset-md-8">-->
    <!--                <h1 class="text-left  header-1-title ">Tbilisi<br>International<br>Film<br>Festival<br><p style="font-size: 240px; margin-top: 50px; color: #BF8F42">20</p></h1>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</section>



<!--==========================
   Portfolio Section
 ============================-->

<section id="items" class="clearfix top42">

        <div class="container-fluid " style="background-color: #E24145">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container p-0">
                        <div class="row mt-5 p-0">
                            <div class="col-sm-12 p-0">
                                <div class="section-header " style="background-color:  #E24145">
                                    <ul class="gallery text-center">
                                        <li>
                                            <h1 style="font-family: <?=$font_family;?>; " > <?=Yii::t('menu', 'Festival 2019')?> &nbsp;
                                                <a style="color: #ffffff !important; border: 1px solid #fff; padding: 2px 4px;" target="_blank" href="<?= Yii::getAlias('@web') . '/img/tbilisi-international-film-festival-agenda-2019pdf.pdf' ?>" >
                                                    <?=Yii::t('agenda', 'Download Programme')?>
                                                </a>
                                            </h1>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--
    <div id="fixedDiv" class="" style="position: relative; width: 100%; top: 0px; background-color: #E24145; height: 450px;"></div>
    <div class="clearfix"></div>
        <div class="container-fluid" style="position: relative; top: -450px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container p-0">
                        <div class="row p-0">
                            <div class="col-sm-12 p-0">
                                <ul id="portfolio-flters" class="p-0 text-center">
                                    <li data-filter="*" class="filter-active all" style="font-family: <?/*=$font_family*/?>"><?/*= Yii::t('main','All')*/?></li>
                                    <?php /*foreach ($days as $row): */?>
                                        <li class="daybyday" style="font-family: <?/*=$font_family*/?> " data-filter=".filter-<?/*= $row->filterday */?>"><?/*= $row->filterday */?></li>
                                    <?php /*endforeach; */?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12  p-0">
                    <div class="container  p-0">
                        <div class="row mt-5  p-0 portfolio-container">
                            <?php /*foreach ($array as $row): */?>
                                <?php
/*                                $direqtorebi = $row["directors"];
                                if ($lang_id == 'ka-GE'){
                                    $title = $row["items"]["title_ge"];
                                    $description = $row["items"]["description_ge"];
                                    $directors = '';
                                    if (count($direqtorebi)>0)
                                        foreach ($direqtorebi as $d)
                                        {$directors .= $d['title_ge']."&nbsp;";}
                                }

                                if ($lang_id == 'en-US'){
                                    $title = $row["items"]["title"];
                                    $description = $row["items"]["description"];
                                    $directors = '';
                                    if (count($direqtorebi)>0)
                                        foreach ($direqtorebi as $d)
                                        {$directors .= $d['title']."&nbsp;";}
                                }
                                */?>
                                <?php
/*                                $string = $row["items"]["filtercategory"];
                                $replaced = str_replace(' ', '-', $string);

                                */?>
                                <div class="col-xs-12 col-sm-3 wow bounceInUp portfolio-item filter-<?/*= $replaced */?> filter-<?/*= $row["items"]["filterday"] */?> filter-<?/*= $row["items"]["filterletter"] */?>"
                                     style="animation-name:  bounceInUp; " data-wow-delay="0.1s">
                                    <div class="card  p-3 mb-5" style="height: 500px;">
                                        <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?/*= $row["items"]["id"] */?>"
                                           href="javascript:;">
                                            <img class="card-img-top mx-auto d-block img-fluid"
                                                 src="<?/*= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] */?>"
                                                 onerror=this.src="<?/*= Yii::getAlias('@web') . '/img/no-image.jpg' */?>"
                                                 alt="Card image cap" style="max-width: 280px; height: 400px;">
                                            <div class="card-body">
                                                <h4 class="text-center" style="color: #ffffff !important; font-family: <?/*= $font_family*/?>; font-size: <?/*=$font_size_movie_title*/?>"><?/*= $title*/?></h4>
                                                <span class="text-center card-title " style= "font-family: <?/*= $font_family*/?>; font-size: <?/*=$font_size_movie_desc*/?>"><?/*= $directors */?>&nbsp;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="animatedModals<?/*= $row["items"]["id"] */?>" class="animated-modal modaluriza">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 pt-5 pb-5">
                                            <h1 class="mb-3" style= "font-family: <?/*= $font_family*/?>; font-size: <?/*=$font_size_big*/?> "><?/*= $title */?></h1>
                                            <?php /*if ($row["items"]["author"]!=''){*/?>
                                                <h6 style= "font-family: <?/*= $font_family*/?>; float: left; " class="pt-0 color-b  mb-4"><?/*= Yii::t('items', 'Day'); */?>  <?/*= $row["items"]["filterday"] */?> / </h6>
                                                <h6 style= "font-family: <?/*= $font_family*/?>; float: left; " class="pt-0 color-b  mb-3"><?/*= $row["items"]["author"] */?></h6>
                                            <?php /*}*/?>
                                            <div class="clearfix"></div>
                                            <img class="card-img-top mb-1 mx-auto d-block img-fluid modamainimage"
                                                 src="<?/*= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] */?>"
                                                 onerror=this.src="<?/*= Yii::getAlias('@web') . '/img/no-image.jpg' */?>"
                                                 alt="Card image cap" >
                                            <?php
/*                                            if ($row["items"]["iscolored"] == '0') {
                                                $iscolored = \Yii::t('items','Colored');
                                            } elseif ($row["items"]["iscolored"] == '1') {
                                                $iscolored = \Yii::t('items','Black & White');
                                            }
                                            */?>
                                            <h6 style= "font-family: <?/*= $font_family*/?>; black " class="pt-0 color-b  mb-3"><?/*= $iscolored */?> / <?/*= $row["items"]["duration"] */?> <?/*= Yii::t('items', 'Min'); */?></h6>
                                            <p><?/*= $description */?></p>
                                            <?php /*if ($row["items"]["production"]!=''){*/?>
                                                <h6 style= "font-family: <?/*= $font_family*/?>; " class="pt-0 color-b   mt-3 mb-3"><?/*= Yii::t('items', 'Production'); */?></h6>
                                                <p><?/*= $row["items"]["production"] */?></p>
                                            <?php /*}*/?>
                                            <?php /*if (count($direqtorebi)>0) {*/?>
                                                <h6 style= "font-family: <?/*= $font_family*/?>; " class="pt-0 color-b  mt-3  mb-3"><?/*= Yii::t('items', 'Director'); */?></h6>
                                                <div class="row p-0">
                                                    <?php /*foreach ($row["directors"] as $key=>$director) { */?>
                                                        <?php
/*                                                        if ($lang_id == 'ka-GE'){
                                                            $title = $director["title_ge"];
                                                            $description = $director["description_ge"];
                                                        }
                                                        if ($lang_id == 'en-US'){
                                                            $title = $director["title"];
                                                            $description = $director["description"];
                                                        }
                                                        */?>
                                                        <div class="col-md-4 col-sm-12  pt-2 director">
                                                            <img class="d-block img-fluid" style="max-width: 120px; max-height: 120px;  padding-right: 10px; "
                                                                 src="<?/*= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] */?>"
                                                                 onerror=this.src="<?/*= Yii::getAlias('@web') . '/img/no-image.jpg' */?>">
                                                            <h6 style= "font-family: <?/*= $font_family*/?>; " class="color-b  mb-3 mt-1" ><?/*= $title */?>&nbsp;</h6>
                                                            <p><?/*= $description */?>&nbsp;</p>
                                                        </div>
                                                    <?php /*} */?>
                                                </div>
                                            <?php /* } */?>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fb-like" data-href="https://tbilisifilmfestival.ge/web/?r=max/index&film_id=<?/*=$row["items"]["id"]*/?>" data-width="320px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <?php /*endforeach; */?>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
</section>
<!-- #portfolio -->



