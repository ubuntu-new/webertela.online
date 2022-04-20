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
    $font_size = '28px !important';
    $font_size_small = '0.9vw !important';
    $font_size_dir = '0.5vw !important';
    $font_size_big = '3.5rem';
    $font_size_movie_title = '1.1rem !important';
    $font_size_movie_desc = '0.9rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '34px !important';
    $font_size_small = '1.3vw !important';
    $font_size_movie_title = '1.5rem !important';
    $font_size_movie_desc = '1.2rem !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem';
    $dinLight = 'bpgAlgeti !important';
}
?>
    <!--==========================
    Why Us Section
  ============================-->
    <section id="items" class="wow fadeIn mt-5">
        <div class="container">

<!--
                <div class="section-header mb-5">
                    <div id="maintitle" style="font-family: <?/*=$font_family*/?>; color:#E24145 ; font-size: 2.5rem !important; text-align: center;"><?/*=\Yii::t('menu','Festival News')*/?></div>
                </div>-->
                <!--<p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>-->

<?php foreach ($news as $row){?>
<?php
if ($lang_id == 'ka-GE'){
$title = $row->title_ge;
$description = $row->description_ge;
}

if ($lang_id == 'en-US'){
$title = $row->title;
$description = $row->description;
}
?>
<?php
$date  = strtotime($row->date);
$day   = date('d',$date);
$month = date('M',$date);
$year  = date('Y',$date);
//die();

$news = $description;
$news = addslashes(preg_replace("/<img[^>]+\>/i", "", $news));

    /*$news = substr($news, 0, strpos($news,' ',200).'...');*/

    $texthtml = $description;
    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $texthtml, $image);
    $firstImg =  isset($image['src'])?$image['src']:'';
    $filepath = $row->filePath;
?>

<?php
if(isset($row->filePath)){?>

            <div class="row">
                <div class="col-sm-12 wow fadeInUp pt-4 mt-5 pt-5">
                    <div class="why-us-content">
                        <img class="webnew lazy card-img-top mx-auto d-block img-fluid" src="<?=Yii::getAlias('@web').'/img/festNoImage.jpg'?>" data-src="<?=Yii::getAlias('@web').'/img/store/'.$row->filePath?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/festNoImage.jpg'?>">
                        <h1 style="color:#E24145 !important; font-size: <?=$font_size?>;font-family:<?=$font_family?>;"> <?= $title?></h1>
                        <div class="news"><?=$news?></div>
                        <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                            <i class="fa fa-calendar"  style="color: #E71F40;float: left;margin-right: 10px;"></i>
                            <h5><?= $year."-".$month."-".$day?></h5>
                            <?php if($row->author !='0'){?>
                            <h5><?= $row->author?></h5>
                            <?php } ?>
                            <div class="read_more card-body text-right ">
                                <a href="<?= \yii\helpers\Url::to(['newsall/index', 'id' => $row->id, 'cat'=>'news']) ?>" class="card-link btn btn-danger "><?= Yii::t('main','Read more')?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
<?php } else if(isset($firstImg)){?>
        <div class="row  ">
            <div class="col-sm-12 wow fadeInUp pt-4 mt-5 pt-5 ">
                <div class="why-us-content">
                    <?php $secondimage = str_replace("../uploads","/web/uploads",$firstImg)?>
                    <img class="webnew card-img-top mx-auto d-block img-fluid" src="<?=$secondimage?>" alt="<?=$secondimage?>">
                    <h1 style="color:#E24145  !important;  font-size: <?=$font_size?>;  font-family: <?=$font_family?>; "> <?= $title?></h1>
                    <div class="news">
                    <?=str_replace("../uploads","/web/uploads",$news)?>
                    </div>
                    <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                        <i class="fa fa-calendar"  style="color: #E71F40;float: left;margin-right: 10px;"></i>
                        <h5><?= $year."-".$month."-".$day?></h5>
                        <?php if($row->author !='0'){?><
                            <h5><?= $row->author?></h5>
                        <?php } ?>
                        <div class="read_more card-body text-right">
                            <a href="<?= \yii\helpers\Url::to(['newsall/index', 'id' => $row->id, 'cat'=>'news']) ?>" class="card-link btn btn-danger "><?= Yii::t('main','Read more')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } else {?>
        <div class="row ">
            <div class="col-sm-12 wow fadeInUp pt-4 mt-5 pt-5 ">
                <div class="why-us-content">
                    <h1 style="color: #E71F40 !important;  font-size: <?=$font_size?> ;font-family: <?= $font_family?>"><?= $title?></h1>
                    <div class="news">
                    <?=str_replace("../uploads","/web/uploads",$news)?>
                    </div>
                    <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                        <i class="fa fa-calendar"  style="color: #E71F40;float: left;margin-right: 10px;"></i>
                        <h5><?= $year."-".$month."-".$day?></h5>
                        <?php if($row->author !='0'){?><
                            <h5><?= $row->author?></h5>
                        <?php } ?>
                        <div class="read_more card-body text-right">
                            <a href="<?= \yii\helpers\Url::to(['newsall/index', 'id' => $row->id,  'cat'=>'news']) ?>" class="card-link btn btn-danger "><?= Yii::t('main','Read more')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
?>

<!--
        <div style="display: none; border-radius: 0px !important; padding: 0px !important; overflow: auto" id="animatedModals<?/*= $row->id */?>" class="animated-modal modaluriza">
            <div class="large-12 twelve columns" style="border-right: 100px solid #E71F40">
                <div style="width: 80%;  padding: 0 60px; float: left;">
                    <h1 style="color: #E71F40 !important;">assasdasd</h1>
                    <h6 style="color: #E71F40 !important;">aweaweawe</h6>
                </div>
            </div>
        </div>-->

<?php
// display pagination
echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
    //Css option for container
    'options' => ['class' => 'pagination'],
    //First option value
   /* 'firstPageLabel' => 'First',*/
    //Last option value
   /* 'lastPageLabel' => 'Last',*/
    //Previous option value
    'prevPageLabel' => 'Preview',
    //Next option value
    'nextPageLabel' => 'Next',
    //Current Active option value
    'activePageCssClass' => 'active',
    //Max count of allowed options
    'maxButtonCount' => 3,

    // Css for each options. Links
    'linkOptions' => ['class' => ''],
    'disabledPageCssClass' => 'disabled',

    // Customzing CSS class for navigating link
    'prevPageCssClass' => 'p-bext',
    'firstPageCssClass' => 'pack',
    'nextPageCssClass' => 'p-n-first',
    'lastPageCssClass' => 'p-last',
]);

?>

    </section>

