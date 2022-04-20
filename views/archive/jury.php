<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Jury';
//$this->params['breadcrumbs'][] = $this->title;
use app\assets\ItemAsset;
ItemAsset::register($this);

?>
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
    $font_size = '25px !important';
    $font_size_small = '0.9vw !important';
    $font_size_dir = '0.5vw !important';
    $font_size_big = '3.5rem';
    $font_size_movie_title = '1.1rem !important';
    $font_size_movie_desc = '0.9rem !important';
    $dinLight = 'bpgAlgeti !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'BebasNeueRegular !important';
    $font_size = '28px !important';
    $font_size_small = '1.3vw !important';
    $font_size_movie_title = '1.5rem !important';
    $font_size_movie_desc = '1.2rem !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem';
    $dinLight = 'bpgAlgeti !important';
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>


<!--==========================
  Team Section
============================-->

    <section id="items" class="section-bg">
        <div class="container-fluid text-center">
            <div class="row" style="background-color:  #E24145;">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <!-- <li data-filter="*" class="filter-active">All</li>-->
                        <?php foreach ($year as $row):?>
                            <li class="sections " data-filter=".filter-<?=$row->year?>"><?=$row->year?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>

            <div class="section-header mb-5">
                <div id="maintitle" style="font-family: <?=$font_family?>; color:#E24145 ; font-size: 2.5rem !important; text-align: center;"><?=\Yii::t('menu','Jury')?></div>
            </div>
        <div class="container">
            <div class="row">
                <?php foreach ($jury as $row):?>
                    <?php
                    if ($lang_id == 'ka-GE'){
                        $title = $row['title_ge'];
                        $description = $row['description_ge'];
                    }

                    if ($lang_id == 'en-US'){
                        $title = $row['title'];
                        $description = $row['description'];
                    }
                    ?>
                    <div class="col-lg-4 col-sm-12 wow bounceInUp" style="animation-name:  bounceInUp" data-wow-delay="0.1s">
                        <div class="card_jury shadow-sm p-3 mb-5" style="background-color: white">
                            <img class="jury-image mx-auto d-block" src="<?=Yii::getAlias('@web').'/img/store/'.$row["filePath"]?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/no-image.jpg'?>" >
                            <div class="card-body_jury jury-title" style="height: 155px; overflow: hidden">
                                <h6 class="mt-3" style="font-family: <?=$font_family?>; font-size: <?=$font_size?>"><?=$title?></h6>
                                <span style="font-size: 15px;line-height: 18px;"><?=$description?></span>
                            </div>
                            <div class="read_more card-body text-right ">
                                <a href="<?= \yii\helpers\Url::to(['jury/view', 'id' => $row["id"]]) ?>" class="card-link btn btn-danger "><?= Yii::t('main','Read more')?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>





    <script type="text/javascript">

        /*<![CDATA[*/

        jQuery.ajax({'url':'/ajax','type':'POST','dataType':'html','data':'({title : this.getAttribute(\'id\')})','cache':false});

        /*]]>*/

    </script>