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


<!--==========================
  Portfolio Section
============================-->
<div class="section-bg">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg');?>
        </div>
    </div>
</div>

<section id="items" class="text-center  section-bg pt-5" style="position: relative;background-color:  #E24145">
    <div class="row">
        <div class="col-lg-12">
            <ul id="portfolio-flters" class="p-0">
                <li data-filter="*" class="filter-active">All</li>
                <?php foreach ($category as $row): ?>
                    <?php
                    $string = $row->filtercategory;
                    $replaced = str_replace(' ', '-', $string);
                    ?>
                    <li style="font-family: <?=$font_family?>; font-size: <?=$font_size_small?>" class="sections "
                        data-filter=".filter-<?= $replaced ?>"><?= Yii::t('main',$row->filtercategory) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>



    <div class="section-header pt-100 " style="background-color:  #E24145">
        <h1 class="header-pages">OPENING/CLOSING <?= count($arrayStarter)?></h1>
<!--        <ul  class="gallery" style="margin-bottom: 0rem;">-->
<!--            <li data-id="letters" onclick="jQuery.ajax();"><h3>A - Z</h3></li>-->
<!--            <li data-id="daybyday"><h3>day by day</h3></li>-->
<!--            <li data-id="sections"><h3>sections</h3></li>-->
<!--        </ul>-->
    </div>

    <div  style="position: absolute;height: 650px; width: 100%; background-color: #E24145"></div>

    <div class="container p-150">
        <div class="row portfolio-containers mt-5">
            <div class="col-md-3 col-sm-12  wow bounceInUp portfolio-item" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                <div class="card  p-3 mb-5">
                    &nbsp;
                </div>
            </div>
            <div class="col-md-3 col-sm-12  wow bounceInUp portfolio-item" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                <?php  ?>
                <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?=$starter?$arrayStarter[0]['itemStarter']['id']:null?>">
                <div class="card  p-3 mb-5">
                    <?php
                    $img = "";
                    if ($starter)
                        if ($arrayStarter[0]['itemStarter']['filePath'] != '')
                            $img = Yii::getAlias('@web').'/img/store/'.$arrayStarter[0]['itemStarter']['filePath'];
                        else $img = Yii::getAlias('@web').'/files/movies/'.$arrayStarter[0]['itemStarter']['main_image']
                    ?>
                    <img class="card-img-top" src="<?=$img?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>"   alt="Card image cap" style="height: 400px">
                    <div class="card-body">
                        <h2 class=" text-center"><?=($starter?$arrayStarter[0]['itemStarter']['title']:'No info')?></h2>
                        <p class="text-center card-title">
                            <?php
                            if ($starter)
                            foreach ($arrayStarter[0]['directors'] as $director)
                            {
                                echo $director['title'];
                            }
                            ?>
                    </div>
                </div>
                </a>
            </div>
            <!-- modal starter -->
            <div style="display: none; border-radius: 0px !important; padding: 0px !important; overflow: auto"
                 id="animatedModals<?= ($starter?$arrayStarter[0]['itemStarter']['id']:"")?>" class="animated-modal modaluriza">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-md-4  p-0">
                            <img class="card-img-top mx-auto d-block img-fluid"
                                 src="<?= Yii::getAlias('@web') . '/img/store/' . ($starter?$arrayStarter[0]['itemStarter']["filePath"] :"")?>"
                                 onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                        </div>
                        <div class="col-md-8 p-3 mb-5 modal-item">
                            <h1><?= ($starter?$arrayStarter[0]['itemStarter']["title"]:"") ?></h1>
                            <?php
                            if ($starter) :
                            if ($arrayStarter[0]['itemStarter']["iscolored"] == '0') {
                                $iscolored = 'Color';
                            } elseif ($arrayStarter[0]['itemStarter']["iscolored"] == '1') {
                                $iscolored = 'Blach & White';
                            }
                            endif;
                            ?>
                            <h3 class="pt-3"><?= ($starter?$iscolored:""); ?>
                                / <?= ($starter?$arrayStarter[0]['itemStarter']["duration"]:"") ?> <?= Yii::t('items', 'Min'); ?></h3>
                            <p><?=($starter?$arrayStarter[0]['itemStarter']["description"]:"") ?></p>

                            <h3 class="pt-3"><?= Yii::t('items', 'Production'); ?></h3>
                            <p><?= ($starter?$arrayStarter[0]['itemStarter']["production"]:"") ?></p>

                            <h3 class="pt-3"><?= Yii::t('items', 'Director'); ?></h3>
                            <div class="row">

                                <?php
                                if ($starter) :
                                foreach ($arrayStarter[0]['directors'] as $director) { ?>

                                    <div class="col-md-4  pt-3">
                                        <img class="d-block img-fluid" style="max-width: 150px; max-height: 150px; float: left; padding-right: 10px; "
                                             src="<?= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] ?>"
                                             onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                                        <h3><?= $director["title"] ?>&nbsp;</h3>
                                        <p><?= $director["description"] ?>&nbsp;</p>
                                    </div>



                                <?php } endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END modal starter -->
            <div class="col-md-3 col-sm-12  wow bounceInUp portfolio-item" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                <?php  ?>
                <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?=$closer?$arrayCloser[0]['itemCloser']['id']:null?>">
                    <div class="card  p-3 mb-5">
                        <?php
                        $img = "";
                        if ($closer)
                            if ($arrayCloser[0]['itemCloser']['filePath'] != '')
                                $img = Yii::getAlias('@web').'/img/store/'.$arrayCloser[0]['itemCloser']['filePath'];
                            else $img = Yii::getAlias('@web').'/files/movies/'.$arrayCloser[0]['itemCloser']['main_image']
                        ?>
                        <img class="card-img-top" src="<?=$img?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>"   alt="Card image cap" style="height: 400px">
                        <div class="card-body">
                            <h2 class=" text-center"><?=($closer?$arrayCloser[0]['itemCloser']['title']:'No info')?></h2>
                            <p class="text-center card-title">
                                <?php
                                if ($closer)
                                    foreach ($arrayCloser[0]['directors'] as $director)
                                    {
                                        echo $director['title'];
                                    }
                                ?>
                        </div>
                    </div>
                </a>
            </div>
            <!-- modal starter -->
            <div style="display: none; border-radius: 0px !important; padding: 0px !important; overflow: auto"
                 id="animatedModals<?= ($closer?$arrayCloser[0]['itemCloser']['id']:"")?>" class="animated-modal modaluriza">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-md-4  p-0">
                            <img class="card-img-top mx-auto d-block img-fluid"
                                 src="<?= Yii::getAlias('@web') . '/img/store/' . ($closer?$arrayCloser[0]['itemCloser']["filePath"] :"")?>"
                                 onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                        </div>
                        <div class="col-md-8 p-3 mb-5 modal-item">
                            <h1><?= ($closer?$arrayCloser[0]['itemCloser']["title"]:"") ?></h1>
                            <?php
                            if ($closer) :
                                if ($arrayCloser[0]['itemCloser']["iscolored"] == '0') {
                                    $iscolored = 'Color';
                                } elseif ($arrayCloser[0]['itemCloser']["iscolored"] == '1') {
                                    $iscolored = 'Blach & White';
                                }
                            endif;
                            ?>
                            <h3 class="pt-3"><?= ($closer?$iscolored:""); ?>
                                / <?= ($closer?$arrayCloser[0]['itemCloser']["duration"]:"") ?> <?= Yii::t('items', 'Min'); ?></h3>
                            <p><?=($closer?$arrayCloser[0]['itemCloser']["description"]:"") ?></p>

                            <h3 class="pt-3"><?= Yii::t('items', 'Production'); ?></h3>
                            <p><?= ($closer?$arrayCloser[0]['itemCloser']["production"]:"") ?></p>

                            <h3 class="pt-3"><?= Yii::t('items', 'Director'); ?></h3>
                            <div class="row">

                                <?php
                                if ($closer) :
                                    foreach ($arrayCloser[0]['directors'] as $director) { ?>

                                        <div class="col-md-4  pt-3">
                                            <img class="d-block img-fluid" style="max-width: 150px; max-height: 150px; float: left; padding-right: 10px; "
                                                 src="<?= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] ?>"
                                                 onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                                            <h3><?= $director["title"] ?>&nbsp;</h3>
                                            <p><?= $director["description"] ?>&nbsp;</p>
                                        </div>



                                    <?php } endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END modal starter -->
            <div class="col-md-3 col-sm-12  wow bounceInUp portfolio-item" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                <div class="card  p-3 mb-5">
                    &nbsp;
                </div>
            </div>
    </div>





        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters" class="p-0">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php foreach ($category as $row): ?>
                        <?php
                        $string = $row->filtercategory;
                        $replaced = str_replace(' ', '-', $string);
                        ?>
                        <li style="font-family: <?=$font_family?>; font-size: <?=$font_size_small?>" class="sections "
                            data-filter=".filter-<?= $replaced ?>"><?= Yii::t('main',$row->filtercategory) ?></li>
                    <?php endforeach; ?>
                </ul>
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

                                ?>
                                <div class="col-xs-12 col-sm-3 wow bounceInUp portfolio-item filter-<?= $replaced ?> filter-<?= $row["items"]["filterday"] ?> filter-<?= $row["items"]["filterletter"] ?>"
                                     style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                                    <div class="card  p-3 mb-5" style="height: 500px;">
                                        <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?= $row["items"]["id"] ?>"
                                           href="javascript:;">
                                            <img class="card-img-top mx-auto d-block img-fluid"
                                                 src="<?= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] ?>"
                                                 onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>"
                                                 alt="Card image cap" style="max-width: 280px; height: 400px;">
                                            <div class="card-body">
                                                <h4 class="text-center" style="color: #ffffff !important; font-family: <?= $font_family?>;"><?= $title?></h4>
                                                <span class="text-center card-title" style= "font-family: <?= $font_family?>; "><?= $directors ?>&nbsp;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="animatedModals<?= $row["items"]["id"] ?>" class="animated-modal modaluriza">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 p-0">
                                            <img class="card-img-top mx-auto d-block img-fluid"
                                                 src="<?= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] ?>"
                                                 onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>"
                                                 alt="Card image cap" >
                                        </div>
                                        <div class="col-md-8 col-sm-12 p-5">
                                            <h1 style= "font-family: <?= $font_family?>; "><?= $title ?></h1>
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
                                                            <p><?= $description ?>&nbsp;</p>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php  } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
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