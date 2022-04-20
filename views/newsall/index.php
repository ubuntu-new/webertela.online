<?php
/* @var $this yii\web\View */
?>
<?php
$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';
foreach ($newsall as $row):
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


<?php
if ($lang_id == 'ka-GE'){
    $title = $row["title_ge"];
    $description = $row["description_ge"];
}

if ($lang_id == 'en-US'){
    $title = $row["title"];
    $description = $row["description"];
}
?>
<?php
$date  = strtotime($row["date"]);
$day   = date('d',$date);
$month = date('M',$date);
$year  = date('Y',$date);
//die();

$news = $description;
$news = addslashes(preg_replace("/<img[^>]+\>/i", "", $news));
if (strlen($news) > 200){
    $news = addslashes(substr($news, 0, strpos($news,' ',200)).'...');
}


$texthtml = $description;
preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $texthtml, $image);
$firstImg =  isset($image['src'])?$image['src']:'';
$filepath = $row["filePath"];
?>
    <section id="features">
        <div class="container">
    <?php
    if(isset($filepath)){?>
            <div class="row feature-item">
                <div class="col-sm-12 wow fadeInUp pt-5 pt-lg-0 ">
                    <h1 style="color:#E24145 !important; font-size:<?=$font_size?>;  font-family: <?=$font_family?>; position: relative; "> <?= $title?></h1>
                    <div class="row mb-3">
                    <img class="webnew card-img-top mx-left d-block img-fluid mt-3" style="max-width: 500px;" src="<?=Yii::getAlias('@web').'/img/store/'.$filepath?>" onerror=this.src="<?=Yii::getAlias('@web').'/img/festNoImage.jpg'?>">
                    </div>

                    <div class="col-md-12">
                        <div class="fb-like" data-href="https://tbilisifilmfestival.ge/web/?r=newsall/index&id=<?=$row['id']?>&news_id=<?=$row['id']?>" data-width="320px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                    <?php $maindesc = str_replace("../uploads","/web/uploads",$description)?>
                    <?php $desc = str_replace("https://uploads","/web/uploads",$maindesc)?>
                    <?php $desc1 = str_replace("http://uploads","/web/uploads",$desc)?>
                    <div class="newsiza" style="text-align: left"> <?=$desc1?></div>
                    <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                        <i class="fa fa-calendar"  style="color: #E71F40;float: left;margin-right: 10px;"></i>
                        <h5><?= $year."-".$month."-".$day?></h5>
                        <?php if($row["author"] !='0'){?>
                            <h5><?= $row["author"]?></h5>
                        <?php } ?>
                    </div>
                </div>

            </div>
    <?php } else if(isset($firstImg)){?>
        <div class="row feature-item" style="display: block">
            <!--<img class="webnew card-img-top mx-auto d-block img-fluid" src="<?/*=Yii::getAlias('@web').$firstImg*/?>" onerror=this.src="<?/*=Yii::getAlias('@web').'/img/festNoImage.jpg'*/?>">-->
            <h1 style="color:#E24145 !important; font-size:<?=$font_size?>;  font-family: <?=$font_family?>; position: relative; "> <?= $title?></h1>
            <div class="row mb-3">
                <?php $maindesc = str_replace("../uploads","/web/uploads",$description)?>
                <?php $desc = str_replace("https://uploads","/web/uploads",$maindesc)?>
                <?php $desc1 = str_replace("http://uploads","/web/uploads",$desc)?>
                <div class="newsiza"> <?=$desc1?></div>
            </div>
            <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                <i class="fa fa-calendar" style="color: #E71F40;float: left;margin-right: 10px;"></i>
                <h5><?= $year."-".$month."-".$day?></h5>
                <?php if($row["author"] !='0'){?><
                    <h5><?= $row["author"]?></h5>
                <?php } ?>
            </div>
            </div>
        </div>
    <?php } else {?>
        <div class="row feature-item">
            <div class="col-sm-12 wow fadeInUp pt-5 pt-lg-0">
                <h4><?=$title?></h4>
                <?php $maindesc = str_replace("../uploads","/web/uploads",$description)?>
                <?php $desc = str_replace("https://uploads","/web/uploads",$maindesc)?>
                <?php $desc1 = str_replace("http://uploads","/web/uploads",$desc)?>
                <div class="newsiza"> <?=$desc1?></div>
                <div class="features wow bounceInUp clearfix  mt-2 pt-2 ">
                    <i class="fa fa-calendar" style="color: #E71F40;float: left;margin-right: 10px;"></i>
                    <h5><?= $year."-".$month."-".$day?></h5>
                    <?php if($row["author"] !='0'){?><
                        <h5><?= $row["author"]?></h5>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php }?>
        <div class="row mt-5">
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
        </div>

    </section><!-- #about -->
<?php endforeach;?>