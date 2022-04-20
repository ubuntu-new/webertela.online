<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';
if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
}

if ($lang_id == 'en-US'){
    $font_family = 'nexa !important';
}

?>
<div class="container-fluid min-vh-100">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>

<section id="why-us" class="wow fadeIn">
    <div class="container">

        <header class="section-header">
            <h3 style="font-family: <?=$font_family;?>"><?= \Yii::t('menu','Useful Info')?></h3>
            <!--<p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>-->
        </header>
        <?php foreach ($news as $row){?>
            <?php
            if ($lang_id == 'ka-GE'){
                $title = $row->title_ge;
                $description = $row->description_ge;
            }

            if ($lang_id == 'en-US'){
                $title =  $row->title;
                $description =  $row->description;
            }
            ?>

            <div class="row  wow bounceInUp">

                <div class="col-lg-6 mt-5 pt-5 ">
                    <div class="why-us-img">
                        <img class="card-img-top mx-auto d-block img-fluid" src="<?=Yii::getAlias('@web').'/img/store/'.$row->filePath?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/festNoImage.jpg'?>">
                    </div>
                </div>

                <div class="col-lg-6 pt-4 mt-5 pt-5 order-2 order-lg-1">
                    <div class="why-us-content">
                        <h3 style="color: #E71F40 !important;font-family: <?=$font_family;?>"> <?= $title?></h3>
                        <?= $description?>
                        <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                            <!--<i class="fa fa-diamond" style="color: #f058dc;"></i>-->
                            <h5><?= $row->date?></h5>
                        </div>

                    </div>

                </div>

            </div>




            <div style="display: none; border-radius: 0px !important; padding: 0px !important; overflow: auto" id="animatedModals<?= $row->id ?>" class="animated-modal modaluriza">
                <div class="large-12 twelve columns" style="border-right: 100px solid #E71F40">
                    <div style="width: 80%;  padding: 0 60px; float: left;">
                        <h1 style="color: #E71F40 !important;">assasdasd</h1>
                        <h6 style="color: #E71F40 !important;">aweaweawe</h6>
                    </div>
                </div>


            </div>
        <?php }?>

</section>
</div></div>