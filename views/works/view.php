<?php
use yii\helpers\Html;
 \app\assets\WorksAsset::register($this);
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
    $font_family = 'BebasNeueRegular !important';

}
?>
<?php
$worksFull = $works[0];
//$works[0]->id;
?>
<div class="project-card-mobile" style="background-color: #050706">
    <div class="section" <!--style="
        background-image: url(<?/*=Yii::getAlias('@web').'/img/bg-piling1.jpg'*/?>);
        position: relative;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
        background-position: 70% 50%;
        background-repeat: no-repeat;
        background-size: cover;
        "-->>
        <div class="section-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 text-left">
                        <h1 class="font-libre fs48 lh-sm"><strong><?=$worksFull->title?></strong></h1>
                        <ul class="social social-rounded mt100">
                       <!--     <li><a href="#" class="text-grey-light"><i class="socicon-twitter"></i></a></li>-->
                            <li><a href="<?=$worksFull->facebook?>" class="text-grey-light" target="_blank"><i class="socicon-facebook"></i></a></li>
                           <!-- <li><a href="#" class="text-grey-light"><i class="socicon-googleplus"></i></a></li>
                            <li><a href="#" class="text-grey-light"><i class="socicon-tumblr"></i></a></li>
                            <li><a href="#" class="text-grey-light"><i class="socicon-rss"></i></a></li>-->
                        </ul>
                    </div>

                    <div class="col-lg-2 d-none d-lg-block"></div>
                    <div class="col-sm-6 text-left">
                        <div class="row mt-4">
                            <div class="col-6">
                                <div class="project-info-item">
                                    <div class="project-info-title">client</div>
                                    <div class="project-info-descr"><?=$worksFull->client?></div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="project-info-item">
                                    <div class="project-info-title">services</div>
                                    <div class="project-info-descr">Web Design <br /> Frontend development<br/>
                                        Backend development</div>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="project-info-item">
                                    <div class="project-info-title">date</div>
                                    <div class="project-info-descr"><?=$worksFull->year?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="project-info-item text-left">
                            <div class="project-info-descr"><?=$worksFull->description?></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section-item">
            <div class="project-card-promo full-height" style="background-image: url(<?=Yii::getAlias('@web').'/img/'.$worksFull->img?>);"></div>
        </div>

  <!--      <div class="section-item text-left">
            <div class="container">
                <div class="lead lead-lg">Brole is a startup that aims to supply energy (starting with gas) to domestic household across the UK. Create a very simple yet stunning logotype and promo site that sets the brand of Entice Energy apart from the competitors like a fresh take on an already saturated area.</div>
            </div>
        </div>

        <div class="section-item">
            <div class="container">
                <hr>
            </div>
        </div>

        <div class="section-item text-left">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h2 class="mb-5 font-libre fs30"><strong>UI/UX Solution</strong></h2>
                    </div>
                    <div class="col-md-10">
                        <div class="lh-lg text-grey">The goal for the website was to bring the look and feel of the brand to the web while creating an easy to navigate, informative site. We took a complex topic and distilled it down to an organizational structure that would make sense to normal people. To make the content easier to digest, we simplified copy and focused on type pairings and typography rules that make reading on the web much easier. The overall aesthetic was meant to convey a sense of tradition while inspiring trust.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-item text-left">
            <div class="container">
                <div class="screen-list row a-grid">
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="screen-item"><img src="img/pic83.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="screen-item"><img src="img/pic84.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="screen-item"><img src="img/pic85.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="screen-item"><img src="img/pic86.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="screen-item"><img src="img/pic87.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="screen-item"><img src="img/pic88.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="screen-item"><img src="img/pic89.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="screen-item"><img src="img/pic90.jpg" alt="" /></div>
                    </div>
                    <div class="grid-item col-6 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="screen-item"><img src="img/pic91.jpg" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-item">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-11">
                        <div class="testimonial-item">
                            <div class="testimonial-text font-libre">“Lewis team delivered on every promise. Re-branding was a project we had put off for a while because we knew it would such an undertaking. Lewis team made the process seamless and the quality of the work delivered could not have been better. We are so pleased with the outcome and look forward to a continued working relationship with the Lewis team.”</div>
                            <div class="testimonial-author text-uppercase">Jhon Terry, ceo of apple</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-item">
            <div class="container">
                <hr>
            </div>
        </div>

        <div class="section-item">
            <div class="container">
                <button class="like-btn"><i class="icon ion-heart"></i></button>
                <div class="text-grey mt-3">268 Liked</div>
            </div>
        </div>

    </div>-->

    <!--<div class="next-project">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="single-project-web-design.html" class="prev-project-link">
                        <div class="next-title">Previous</div>
                        <h3 class="font-libre">Boranito Skate<br /> Store</h3>
                        <div class="next-project-photo" style="background-image: url(img/piling-project4.jpg);"></div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="single-project-photography.html" class="next-project-link">
                        <div class="next-title">Next</div>
                        <h3 class="font-libre">Wood Bottle<br /> Packaging</h3>
                        <div class="next-project-photo" style="background-image: url(img/pic30.jpg);"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>-->

</div>
