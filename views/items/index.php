<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Items';
//$this->params['breadcrumbs'][] = $this->title;
use app\assets\ItemAsset;
ItemAsset::register($this);
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
    $font_size_movie_title = '1.7rem !important';
    $font_size_movie_desc = '1.3rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '7vh !important';
    $font_size_small = '1.3vw !important';
    $font_size_movie_title = '2.3rem !important';
    $font_size_movie_desc = '1.8rem !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem';
    $dinLight = 'bpgAlgeti !important';
}
?>
<!--==========================
  Portfolio Section
============================-->
<section id="items" class="clearfix">
<div class="container-fluid movies" style="background-color: #E24145">
    <div class="row">
        <div class="col-sm-12">
            <div class="container p-0">
                <div class="row mt-5 p-0">
                    <div class="col-sm-12 p-0">
                        <div class="section-header " style="background-color:  #E24145">
                            <ul class="gallery  pl-0">
                                <li data-id="letters" style="font-family: <?=$font_family?>;" onclick="jQuery.ajax();"><h1><?= Yii::t('main','A - Z')?></h1></li>
                                <li data-id="daybyday" style="font-family: <?=$font_family?>;"><h1><?= Yii::t('main','day by day')?></h1></li>
                                <li data-id="sections" style="font-family: <?=$font_family?>;"><h1><?= Yii::t('main','sections')?></h1></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="fixedDiv" class="" style="position: relative; width: 100%; top: 0px; background-color: #E24145; height:450px;"></div>
    <div class="clearfix"></div>
<div class="container-fluid" style="margin-top: -450px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="container p-0">
                <div class="row p-0">
                    <div class="col-sm-12 p-0">
                        <ul id="portfolio-flters" class="p-0">
                            <li data-filter="*" class="filter-active">All</li>
                            <?php foreach ($letters as $row): ?>
                                <li style="font-family: <?=$font_family?>;" class="letters sizebi"
                                    data-filter=".filter-<?= $row->filterletter ?>"><?= $row->filterletter ?></li>
                            <?php endforeach; ?>
                            <?php foreach ($days as $row): ?>
                                <li style="font-family: <?=$font_family?>;" class="daybyday sizebi" data-filter=".filter-<?= $row->filterday ?>"><?= $row->filterday ?></li>
                            <?php endforeach; ?>
                            <?php foreach ($category as $row): ?>
                                <?php
                                if ($lang_id == 'ka-GE'){
                                    $title = $row->titlecat_ge;
                                }

                                if ($lang_id == 'en-US'){
                                    $title = $row->titlecat;
                                }
                                ?>
                                <?php
                                $string = $row->filtercategory;
                                $replaced = str_replace(' ', '-', $string);
                                ?>
                                <li style="font-family: <?=$font_family?>; " class="sections sizebi"
                                    data-filter=".filter-<?= $replaced ?>"><?= $title ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" >
        <div class="col-sm-12  p-0">
            <div class="container  p-0">
                <div class="row mt-5  p-0 portfolio-container">
                    <?php foreach ($array as $row): ?>
                        <?php
                        $direqtorebi = $row["directors"];
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
                        ?>
                        <?php
                        $string = $row["items"]["filtercategory"];
                        $replaced = str_replace(' ', '-', $string);

                        ?>
                        <div class="col-xs-12 col-sm-3 wow bounceInUp portfolio-item filter-<?= $replaced ?> filter-<?= $row["items"]["filterday"] ?> filter-<?= $row["items"]["filterletter"] ?>"
                             style="animation-name:  bounceInUp; data-wow-delay="0.1s">
                            <div class="card  p-3 mb-5" style="height: 500px;">
                                <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?= $row["items"]["id"] ?>"
                                   href="javascript:;">
                                    <img class="card-img-top mx-auto d-block img-fluid"
                                         src="<?= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] ?>"
                                         onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>"
                                         alt="Card image cap" style="max-width: 280px; height: 400px;">
                                    <div class="card-body">
                                        <h4 class="text-center" style="color: #ffffff !important; font-family: <?= $font_family?>; font-size: <?=$font_size_movie_title?>"><?= $title?></h4>
                                        <span class="text-center card-title " style= "font-family: <?= $font_family?>; font-size: <?=$font_size_movie_desc?>"><?= $directors ?>&nbsp;</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                <div id="animatedModals<?= $row["items"]["id"] ?>" class="animated-modal modaluriza">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 pt-5 pb-5">
                                <h1 class="mb-5" style= "font-family: <?= $font_family?>; font-size: <?=$font_size_big?> "><?= $title ?></h1>
                                <?php if ($row["items"]["author"]!=''){?>
                                    <h6 style= "font-family: <?= $font_family?>; float: left; " class="pt-0 color-b  mb-4"><?= Yii::t('items', 'Day'); ?>  <?= $row["items"]["filterday"] ?> / </h6>
                                    <h6 style= "font-family: <?= $font_family?>; float: left; " class="pt-0 color-b  mb-3"><?= $row["items"]["author"] ?></h6>
                                <?php }?>
                                <div class="clearfix"></div>
                                <img class="card-img-top mb-1 mx-auto d-block img-fluid modamainimage"
                                     src="<?= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] ?>"
                                     onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>"
                                     alt="Card image cap" >
                                <?php
                                if ($row["items"]["iscolored"] == '0') {
                                    $iscolored = \Yii::t('items','Colored');
                                } elseif ($row["items"]["iscolored"] == '1') {
                                    $iscolored = \Yii::t('items','Black & White');
                                }
                                ?>
                                <h6 style= "font-family: <?= $font_family?>; black " class="pt-0 color-b  mb-3"><?= $iscolored ?> / <?= $row["items"]["duration"] ?> <?= Yii::t('items', 'Min'); ?></h6>
                                <p><?= $description ?></p>
                                <?php if ($row["items"]["production"]!=''){?>
                                    <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                    <p><?= $row["items"]["production"] ?></p>
                                <?php }?>
                                <?php if (count($direqtorebi)>0) {?>
                                    <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                    <div class="row p-0">
                                        <?php foreach ($row["directors"] as $key=>$director) { ?>
                                            <?php
                                            if ($lang_id == 'ka-GE'){
                                                $title = $director["title_ge"];
                                                $description = $director["description_ge"];
                                            }

                                            if ($lang_id == 'en-US'){
                                                $title = $director["title"];
                                                $description = $director["description"];
                                            }
                                            ?>
                                            <div class="col-md-4 col-sm-12  pt-2 director">
                                                <img class="d-block img-fluid" style="max-width: 120px; max-height: 120px;  padding-right: 10px; "
                                                     src="<?= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] ?>"
                                                     onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                                                <h6 style= "font-family: <?= $font_family?>; " class="color-b  mb-3 mt-1" ><?= $title ?>&nbsp;</h6>
                                                <p><?= $description ?>&nbsp;</p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php  } ?>
                            </div>
                            <div class="col-md-12">
                                <div class="fb-like" data-href="https://tbilisifilmfestival.ge/web/?r=max/index&film_id=<?=$row["items"]["id"]?>" data-width="320px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>




</section><!-- #portfolio -->
