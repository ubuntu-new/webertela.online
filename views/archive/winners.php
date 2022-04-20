<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Items';
//$this->params['breadcrumbs'][] = $this->title;

use app\assets\ItemAsset;
ItemAsset::register($this);

$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';
?>



<!--==========================
  Portfolio Section
============================-->

<div class="section-bg">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>


<section id="items" class="text-center  section-bg pt-5" style="position: relative;background-color:  #E24145">
    <div class="row">
        <div class="col-lg-12">
            <ul id="portfolio-flters">
                <!--<li data-filter="*" class="filter-active">All</li>-->
                <?php foreach ($year as $row):?>
                    <li class="sections "  onclick="location.href='<?=\yii\helpers\Url::to(["archive/winners",'year'=>$row->year])?>'"  data-filter=".filter-<?=$row->year?>"><?=$row->year?></li>
                <?php endforeach;?>
            </ul>
        </div>
</div>









<?php if(isset($arrayForeign)){?>
    <div class="row">
        <div class="col-12">
            <div class="section-header  " style="background-color:  #E24145">
                <h1 class="header-pages" STYLE="color: #222222 !important;"><?= Yii::t('archive','International Competition winners are:')?></h1>
                <!--        <ul  class="gallery" style="margin-bottom: 0rem;">-->
                <!--            <li data-id="letters" onclick="jQuery.ajax();"><h3>A - Z</h3></li>-->
                <!--            <li data-id="daybyday"><h3>day by day</h3></li>-->
                <!--            <li data-id="sections"><h3>sections</h3></li>-->
                <!--        </ul>-->
            </div>
        </div>
    </div>
<?php }?>
<?php
/*echo "<pre>";
 var_dump($arrayFeauture);
echo "</pre>";
die();*/

/*\Yii::$app->language = ($session->has('lang')) ? $session->get('lang') : 'en-US';*/


?>



   <!-- <div class="d-none d-md-block d-lg-block"  style="position: absolute;height: 650px; width: 100%; background-color: #E24145"></div>-->
    <div class="container p-0 mt-5">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <h3 style="color: #222222"><?= Yii::t('winners','Best Feature Film')?></h3>

            </div>
            <div class="col-md-3 col-sm-12"><h3 style="color: #222222"><?= Yii::t('winners','Best Documentary Film')?></h3></div>
            <div class="col-md-3 col-sm-12"><h3 style="color: #222222"><?= Yii::t('winners','Best Short Film')?></h3></div>
            <div class="col-md-3 col-sm-12"><h3 style="color: #222222"><?= Yii::t('winners','Jury Special Mention')?></h3></div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <h3 style="color: #222222"><?= Yii::t('winners','Best Feature Film')?></h3>
            </div>
            <div class="col-md-3 col-sm-12"><h3 style="color: #222222"><?= Yii::t('winners','Best Documentary Film')?></h3></div>
            <div class="col-md-3 col-sm-12"><h3 style="color: #222222"><?= Yii::t('winners','Best Short Film')?></h3></div>
            <div class="col-md-3 col-sm-12"><h3 style="color: #222222"><?= Yii::t('winners','Jury Special Mention')?></h3></div>
        </div>
    </div>
    <div class="container">

        <div class="row portfolio-containers mt-5">

            <?php  foreach ($arrayForeign as $row) { ?>

                <div class="col-lg-3 col-sm-12 wow bounceInUp portfolio-item filter-<?=$row["itemStarter"]["filtercategory"]?> filter-<?=$row["itemStarter"]["filterday"]?> filter-<?=$row["itemStarter"]["filterletter"]?> filter-<?=$row["itemStarter"]["year"]?>" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                    <div class="card  p-3 mb-5">
                        <?php if ($row["itemStarter"]["filePath"] != '') {?>
                            <img  class="card-img-top" src="<?=Yii::getAlias('@web').'/img/store/'.$row["itemStarter"]["filePath"]?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>"   alt="Card image cap" style="height: 400px">
                        <?php } else{ ?>
                            <img class="card-img-top" src="<?=Yii::getAlias('@web').'/files/movies/main_news/'.$row["itemStarter"]["main_image"]?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>    alt="Card image cap" style="height: 400px">
                        <?php }?>
                        <div class="card-body">
                            <?php
                            foreach ($row['directors'] as $director)
                            {
                                echo $director['title'];
                            }
                            ?>
                            </p>
                            <h4 class="text-center" style="color: #222222 !important;"><?=$row["itemStarter"]["title"]?></h4>
                            <p class="text-center card-title"><?=$row["itemStarter"]["year"]?> | <?=$row["itemStarter"]["id"]?>&nbsp;</p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
<?php if(isset($arrayNational)){?>

    <div class="row">
        <div class="col-12">
            <div class="section-header  " style="background-color:  #E24145">
                <h1 class="header-pages" STYLE="color: #222222 !important;"><?= Yii::t('archive','National Competition winners are:')?></h1>
                <!--        <ul  class="gallery" style="margin-bottom: 0rem;">-->
                <!--            <li data-id="letters" onclick="jQuery.ajax();"><h3>A - Z</h3></li>-->
                <!--            <li data-id="daybyday"><h3>day by day</h3></li>-->
                <!--            <li data-id="sections"><h3>sections</h3></li>-->
                <!--        </ul>-->
            </div>
        </div>
    </div>
<?php }?>
    <div class="container ">

        <div class="row portfolio-containers mt-5">

            <?php  foreach ($arrayNational as $row) { ?>

                <div class="col-lg-3 col-sm-12 wow bounceInUp portfolio-item filter-<?=$row["itemStarter"]["filtercategory"]?> filter-<?=$row["itemStarter"]["filterday"]?> filter-<?=$row["itemStarter"]["filterletter"]?> filter-<?=$row["itemStarter"]["year"]?>" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                    <div class="card  p-3 mb-5">
                        <?php if ($row["itemStarter"]["filePath"] != '') {?>
                            <img class="card-img-top" src="<?=Yii::getAlias('@web').'/img/store/'.$row["itemStarter"]["filePath"]?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>"   alt="Card image cap" style="height: 400px">
                        <?php } else{ ?>
                            <img class="card-img-top" src="<?=Yii::getAlias('@web').'/files/movies/main_news/'.$row["itemStarter"]["main_image"]?>"    onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?> alt="Card image cap" style="height: 400px">
                        <?php }?>
                        <div class="card-body">
                            <?php
                            foreach ($row['directors'] as $director)
                            {
                                echo $director['title'];
                            }
                            ?>
                            </p>
                            <h4 class=" text-center"><?=$row["itemStarter"]["title"]?></h4>
                            <p class="text-center card-title"><?=$row["itemStarter"]["year"]?>&nbsp;</p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</section><!-- #portfolio -->





<script type="text/javascript">

    /*<![CDATA[*/

    jQuery.ajax({'url':'/ajax','type':'POST','dataType':'html','data':'({title : this.getAttribute(\'id\')})','cache':false});

    /*]]>*/

</script>