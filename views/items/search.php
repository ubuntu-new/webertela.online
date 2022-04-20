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
   Search Section
 ============================-->

<section id="items" class="clearfix">

        <div class="container-fluid " style="background-color: #E24145">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container p-0">
                        <div class="row mt-5 p-0">
                            <div class="col-sm-12 p-0">
                                <div class="section-header " style="background-color:  #E24145">
                                    <ul class="gallery text-center">
                                        <li><h1 style="font-family: <?=$font_family;?>; font-size: 2vw" ><?/*=Yii::t('menu', 'Festival 2019')*/?></h1></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div id="fixedDiv" class="" style="position: relative; width: 100%; top: 0px; background-color: #E24145; height: 450px;"></div>
    <div class="clearfix"></div>
        <div class="container-fluid" style="top: -450px; position: relative">

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
                                $image = '';
                                if(isset($row["items"]["filePath"]))
                                {
                                    $image = '/img/store/' . $row["items"]["filePath"];
                                }
                                else if ($row["items"]["img"] != ""){

                                    $image = "/files/movies/main_news/".$row["items"]["img"];
                                }  else if ($row["items"]["main_image"] != "") {

                                    $image = "/files/movies/main_news/" . $row["items"]["main_image"];
                                }
                                ?>
                                <div class="col-xs-12 col-sm-3 wow bounceInUp portfolio-item filter-<?= $replaced ?> filter-<?= $row["items"]["filterday"] ?> filter-<?= $row["items"]["filterletter"] ?>"
                                     style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                                    <div class="card  p-3 mb-5" style="height: 500px;">
                                        <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?= $row["items"]["id"] ?>"
                                           href="javascript:;">
                                            <img class="card-img-top mx-auto d-block img-fluid"
                                                 src="<?= Yii::getAlias('@web') .  $image ?>"

                                                 alt="<?=  $row["items"]["id"]?>" style="max-width: 280px; height: 400px;">
                                            <div class="card-body">
                                                <h4 class="text-center" style="color: #ffffff !important; font-family: <?= $font_family?>;"><?= $title?></h4>
                                                <span class="text-center card-title" style= "font-family: <?= $font_family?>; "><?= $directors ?>&nbsp;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="animatedModals<?= $row["items"]["id"] ?>" class="animated-modal modaluriza">
                                    <div class="row">
                                        <?php if(isset($row["items"]["filePath"]))
                                        { ?>
                                            <div class="col-sm-12 p-5">
                                                <h1 style= "font-family: <?= $font_family?>; "><?= $title ?></h1>
                                                <?php if ($row["items"]["author"]!=''){?>
                                                    <h6 style= "font-family: <?= $font_family?>; float: left; " class="pt-0 color-b  mb-4"><?= Yii::t('items', 'Day'); ?>  <?= $row["items"]["filterday"] ?> / </h6>
                                                    <h6 style= "font-family: <?= $font_family?>; float: left; " class="pt-0 color-b  mb-3"><?= $row["items"]["author"] ?></h6>
                                                <?php }?>
                                                <div class="clearfix"></div>
                                                <img class="card-img-top modamainimage mx-auto d-block img-fluid"
                                                     src="<?= Yii::getAlias('@web') .  $image ?>">
                                                <?php
                                                if ($row["items"]["iscolored"] == '0') {
                                                    $iscolored = \Yii::t('items','Colored');
                                                } elseif ($row["items"]["iscolored"] == '1') {
                                                    $iscolored = \Yii::t('items','Black & White');
                                                }
                                                ?>
                                                <h6 style= "font-family: <?= $font_family?>; black " class="pt-0 color-b  mb-3"><?= $iscolored ?> / <?= $row["items"]["duration"] ?> <?= Yii::t('items', 'Min'); ?></h6>
                                                <p><?=$desc = str_replace("../uploads","/web/uploads",$description)?></p>
                                                <?php if ($row["items"]["production"]!=''){?>
                                                    <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                                    <p><?= $row["items"]["production"] ?></p>
                                                <?php }?>
                                                <?php if (count($direqtorebi)>0) {?>
                                                    <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                                    <div class="row p-0 mt-3">
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
                                                            <div class="col-md-4 col-sm-12  pt-2">
                                                                <img class="d-block img-fluid" style="max-width: 120px; max-height: 120px; float: left; padding-right: 10px; "
                                                                     src="<?= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] ?>"
                                                                     onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                                                                <h6 style= "font-family: <?= $font_family?>; " class="color-b  mb-3 mt-3" ><?= $title ?>&nbsp;</h6>
                                                                <p><?=$desc = str_replace("../uploads","/web/uploads",$description)?></p>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                <?php  } ?>
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-sm-12 p-5">

                                                <div><?=$desc = str_replace("../uploads","/web/uploads",$description)?></div>
                                                <?php if ($row["items"]["production"]!=''){?>
                                                    <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                                    <p><?= $row["items"]["production"] ?></p>
                                                <?php }?>
                                                <?php if (count($direqtorebi)>0) {?>
                                                    <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                                    <div class="row p-0 mt-3">
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
                                                            <div class="col-md-4 col-sm-12  pt-2">
                                                                <img class="d-block img-fluid" style="max-width: 120px; max-height: 120px; float: left; padding-right: 10px; "
                                                                     src="<?= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] ?>"
                                                                     onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                                                                <h6 style= "font-family: <?= $font_family?>; " class="color-b  mb-3 mt-3" ><?= $title ?>&nbsp;</h6>
                                                                <p><?=$desc = str_replace("../uploads","/web/uploads",$description)?></p>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                <?php  } ?>
                                            </div>
                                        <?php  }?>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</section><!-- #portfolio -->



