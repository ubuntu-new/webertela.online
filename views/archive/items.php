<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Items';
//$this->params['breadcrumbs'][] = $this->title;

use app\assets\ItemAsset;

ItemAsset::register($this);
$starter = count($arrayStarter) > 0 ? true:false;
$closer = count($arrayCloser) > 0 ?  true:false;


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
    $font_size_big = '3.5rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '2.5rem !important';
    $font_size_small = '1.3vw !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem !important';
    $dinLight = 'bpgAlgeti !important';
}
?>


<!--==========================
  Portfolio Section
============================-->

<section id="items" class="section-bg" style="position: relative;">
    <div class="section-bg">
        <div class="row">
            <div class="col-12 px-0">
                <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
                <?= Html::img('img/jury.jpg');?>
            </div>
        </div>
    </div>
    <div style="position: absolute;height: 650px; width: 100%; background-color: #E24145"></div>

    <div class="container-fluid" style="background-color: #E24145">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php foreach ($year as $row):?>
                            <li class="sections daybyday" style="font-family: BebasNeueRegular !important" onclick="location.href='<?=\yii\helpers\Url::to(["archive/items",'year'=>$row->year])?>'" data-filter=".filter-<?=$row->year?>"><?=$row->year?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <ul class="gallery text-center">
                        <li><h1 style="font-weight: 600 !important; color: #282A29 !important;font-family: <?=$font_family;?>; font-size:<?=$font_size_big?>" ><?=Yii::t('menu', 'OPENING / CLOSING')?></h1></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">&nbsp;</div>

                <div class="col-md-3 col-sm-12  wow bounceInUp portfolio-item" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                    <?php if (isset($arrayStarter[0])) :?>

                        <?php
                        $direqtorebi = $arrayStarter[0]["directors"];
                        if ($lang_id == 'ka-GE'){
                            $title = $arrayStarter[0]['itemStarter']["title_ge"];
                            $description = $arrayStarter[0]['itemStarter']["description_ge"];
                            $directors = '';
                            if (count($direqtorebi)>0)
                                foreach ($direqtorebi as $d)
                                {$directors .= $d['title_ge']."&nbsp;";}
                        }

                        if ($lang_id == 'en-US'){
                            $title = $arrayStarter[0]['itemStarter']["title"];
                            $description = $arrayStarter[0]['itemStarter']["description"];
                            $directors = '';
                            if (count($direqtorebi)>0)
                                foreach ($direqtorebi as $d)
                                {$directors .= $d['title']."&nbsp;";}
                        }
                        ?>
                        <?php
                        $string = $arrayStarter[0]['itemStarter']["filtercategory"];
                        $replaced = str_replace(' ', '-', $string);
                        $image = '';
                        if(isset($arrayStarter[0]['itemStarter']["filePath"]))
                        {
                            $image = '/img/store/' . $arrayStarter[0]['itemStarter']["filePath"];
                        }
                        else if ($arrayStarter[0]['itemStarter']["img"] != ""){

                            $image = "/files/movies/main_news/".$arrayStarter[0]['itemStarter']["img"];
                        }  else if ($arrayStarter[0]['itemStarter']["main_image"] != "") {

                            $image = "/files/movies/main_news/" . $arrayStarter[0]['itemStarter']["main_image"];
                        }
                        ?>
                        <div class="wow bounceInUp portfolio-item filter-<?= $replaced ?> filter-<?= $arrayStarter[0]['itemStarter']["filterday"] ?> filter-<?= $arrayStarter[0]['itemStarter']["filterletter"] ?>"
                             style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                            <div class="card  p-3 mb-5" style="height: 500px;">
                                <a data-fancybox class="fancyboxedit" data-src="#starter_animatedModals<?= $arrayStarter[0]['itemStarter']["id"] ?>"
                                   href="javascript:;">
                                    <img class="card-img-top mx-auto d-block img-fluid"
                                         src="<?= Yii::getAlias('@web') .  $image ?>"

                                         alt="<?=  $arrayStarter[0]['itemStarter']["id"]?>" style="max-width: 280px; height: 400px;">
                                    <div class="card-body">
                                        <h4 class="text-center" style="color: #ffffff !important; font-family: <?= $font_family?>;"><?= $title?></h4>
                                        <span class="text-center card-title" style= "font-family: <?= $font_family?>; "><?= $directors ?>&nbsp;</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div id="starter_animatedModals<?= $arrayStarter[0]['itemStarter']["id"] ?>" class="animated-modal modaluriza">
                            <div class="container">
                            <div class="row">
                                <?php if(isset($arrayStarter[0]['itemStarter']["filePath"]))
                                { ?>
                                    <div class="col-sm-12 pt-5 pb-5">
                                        <h1 style= "font-family: <?= $font_family?>; "><?= $title ?></h1>
                                        <img class="card-img-top modamainimage mx-auto d-block img-fluid"
                                             src="<?= Yii::getAlias('@web') .  $image ?>">
                                        <?php
                                        if ($arrayStarter[0]['itemStarter']["iscolored"] == '0') {
                                            $iscolored = \Yii::t('items','Colored');
                                        } elseif ($arrayStarter[0]['itemStarter']["iscolored"] == '1') {
                                            $iscolored = \Yii::t('items','Black & White');
                                        }
                                        ?>
                                        <h6 style= "font-family: <?= $font_family?>; black " class="pt-0 color-b  mb-3"><?= $iscolored ?> / <?= $arrayStarter[0]['itemStarter']["duration"] ?> <?= Yii::t('items', 'Min'); ?></h6>
                                        <p><?=$desc = str_replace("../uploads","/web/uploads",$description)?></p>
                                        <?php if ($arrayStarter[0]['itemStarter']["production"]!=''){?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                            <p><?= $arrayStarter[0]['itemStarter']["production"] ?></p>
                                        <?php }?>
                                        <?php if (count($direqtorebi)>0) {?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                            <div class="row p-0 mt-3">
                                                <?php foreach ($direqtorebi as $key=>$director) { ?>
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
                                        <?php if ($arrayStarter[0]['itemStarter']["production"]!=''){?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                            <p><?= $arrayStarter[0]['itemStarter']["production"] ?></p>
                                        <?php }?>
                                        <?php if (count($direqtorebi)>0) {?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                            <div class="row p-0 mt-3">
                                                <?php foreach ($arrayStarter["directors"] as $key=>$director) { ?>
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
                        </div>


                    <?php endif; ?>
                </div>

                <div class="col-md-2">&nbsp;</div>

                <div class="col-md-3 col-sm-12  wow bounceInUp portfolio-item" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                    <?php if (isset($arrayCloser[0])) :?>

                        <?php
                        $direqtorebi = $arrayCloser[0]["directors"];
                        if ($lang_id == 'ka-GE'){
                            $title = $arrayCloser[0]['itemCloser']["title_ge"];
                            $description = $arrayCloser[0]['itemCloser']["description_ge"];
                            $directors = '';
                            if (count($direqtorebi)>0)
                                foreach ($direqtorebi as $d)
                                {$directors .= $d['title_ge']."&nbsp;";}
                        }

                        if ($lang_id == 'en-US'){
                            $title = $arrayCloser[0]['itemCloser']["title"];
                            $description = $arrayCloser[0]['itemCloser']["description"];
                            $directors = '';
                            if (count($direqtorebi)>0)
                                foreach ($direqtorebi as $d)
                                {$directors .= $d['title']."&nbsp;";}
                        }
                        ?>
                        <?php
                        $string = $arrayCloser[0]['itemCloser']["filtercategory"];
                        $replaced = str_replace(' ', '-', $string);
                        $image = '';
                        if(isset($arrayCloser[0]['itemCloser']["filePath"]))
                        {
                            $image = '/img/store/' . $arrayCloser[0]['itemCloser']["filePath"];
                        }
                        else if ($arrayCloser[0]['itemCloser']["img"] != ""){

                            $image = "/files/movies/main_news/".$arrayCloser[0]['itemCloser']["img"];
                        }  else if ($arrayCloser[0]['itemCloser']["main_image"] != "") {

                            $image = "/files/movies/main_news/" . $arrayCloser[0]['itemCloser']["main_image"];
                        }
                        ?>
                        <div class="wow bounceInUp portfolio-item filter-<?= $replaced ?> filter-<?= $arrayCloser[0]['itemCloser']["filterday"] ?> filter-<?= $arrayCloser[0]['itemCloser']["filterletter"] ?>"
                             style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                            <div class="card  p-3 mb-5" style="height: 500px;">
                                <a data-fancybox class="fancyboxedit" data-src="#closer_animatedModals<?= $arrayCloser[0]['itemCloser']["id"] ?>"
                                   href="javascript:;">
                                    <img class="card-img-top mx-auto d-block img-fluid"
                                         src="<?= Yii::getAlias('@web') .  $image ?>"

                                         alt="<?=  $arrayCloser[0]['itemCloser']["id"]?>" style="max-width: 280px; height: 400px;">
                                    <div class="card-body">
                                        <h4 class="text-center" style="color: #ffffff !important; font-family: <?= $font_family?>;"><?= $title?></h4>
                                        <span class="text-center card-title" style= "font-family: <?= $font_family?>; "><?= $directors ?>&nbsp;</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div id="closer_animatedModals<?= $arrayCloser[0]['itemCloser']["id"] ?>" class="animated-modal modaluriza">
                            <div class="row">
                                <?php if(isset($arrayCloser[0]['itemCloser']["filePath"]))
                                { ?>
                                    <div class="col-sm-12 p-5">
                                        <h1 style= "font-family: <?= $font_family?>; "><?= $title ?></h1>
                                        <img class="card-img-top modamainimage mx-auto d-block img-fluid"
                                             src="<?= Yii::getAlias('@web') .  $image ?>">
                                        <?php
                                        if ($arrayCloser[0]['itemCloser']["iscolored"] == '0') {
                                            $iscolored = \Yii::t('items','Colored');
                                        } elseif ($arrayCloser[0]['itemCloser']["iscolored"] == '1') {
                                            $iscolored = \Yii::t('items','Black & White');
                                        }
                                        ?>
                                        <h6 style= "font-family: <?= $font_family?>; black " class="pt-0 color-b  mb-3"><?= $iscolored ?> / <?= $arrayCloser[0]['itemCloser']["duration"] ?> <?= Yii::t('items', 'Min'); ?></h6>
                                        <p><?=$desc = str_replace("../uploads","/web/uploads",$description)?></p>
                                        <?php if ($arrayCloser[0]['itemCloser']["production"]!=''){?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                            <p><?= $arrayCloser[0]['itemCloser']["production"] ?></p>
                                        <?php }?>
                                        <?php if (count($direqtorebi)>0) {?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                            <div class="row p-0 mt-3">
                                                <?php


                                                foreach ($direqtorebi as $key=>$director) { ?>
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
                                        <?php  }  ?>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-sm-12 p-5">

                                        <div><?=$desc = str_replace("../uploads","/web/uploads",$description)?></div>
                                        <?php if ($arrayCloser[0]['itemCloser']["production"]!=''){?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b   mt-3 mb-3"><?= Yii::t('items', 'Production'); ?></h6>
                                            <p><?= $arrayCloser[0]['itemCloser']["production"] ?></p>
                                        <?php }?>
                                        <?php if (count($direqtorebi)>0) {?>
                                            <h6 style= "font-family: <?= $font_family?>; " class="pt-0 color-b  mt-3  mb-3"><?= Yii::t('items', 'Director'); ?></h6>
                                            <div class="row p-0 mt-3">
                                                <?php foreach ($arrayCloser[0]["directors"] as $key=>$director) { ?>
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


                    <?php endif; ?>
                </div>



                <div class="col-md-2">&nbsp;</div>
            </div>
        </div>

    </div>
    <div class="container-fluid" style="background-color: #E24145">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container p-0">
                        <div class="row p-0">
                            <div class="col-sm-12 p-0">
                                <ul id="portfolio-flters" class="p-0">
                                    <li data-filter="*" class="filter-active">All</li>
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
        </div>
    <div class="container-fluid" style="background-color: #E24145">
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
                                <div class="container">
                                <div class="row">
                                    <?php if(isset($row["items"]["filePath"]))
                                    { ?>
                                        <div class="col-sm-12 pt-5 pb-5">
                                            <h1 style= "font-family: <?= $font_family?>; "><?= $title ?></h1>
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
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #portfolio -->


<script type="text/javascript">

    /*<![CDATA[*/

    jQuery.ajax({'url':'/ajax','type':'POST','dataType':'html','data':'({title : this.getAttribute(\'id\')})','cache':false});

    /*]]>*/

</script>