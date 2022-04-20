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
<div class="section section-content"  style="background-color: #050706">
    <div class="container">
       <!-- <div class="row justify-content-md-center">
            <div class="col-lg-10">
                <h3 class="section-item-title-xs">featured worksssss</h3>
                <h1 class="h2-flash font-abril">Bigger, Bolder &amp; Better</h1>

                <ul class="nav nav-inline parallax-link a-grid-filter">
                    <li class="nav-item active"><a data-filter="*" data-text="All">All</a></li>
                    <li class="nav-item"><a data-filter=".category-web" data-text="Web Design">Web Design</a></li>
                    <li class="nav-item"><a data-filter=".category-branding" data-text="Branding">Branding</a></li>
                    <li class="nav-item"><a data-filter=".category-animation" data-text="Animation">Animation</a></li>
                    <li class="nav-item"><a data-filter=".category-mobile" data-text="Mobile Design">Mobile Design</a></li>
                    <li class="nav-item"><a data-filter=".category-photography" data-text="Photography">Photography</a></li>
                </ul>
            </div>
        </div>-->

        <div class="project-list-metro a-grid row">
            <?php foreach ($works as $row):?>
                <div class="grid-item category-mobile category-animation col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                    <a href="../works/view?id=<?=$row->id?>">
                        <div class="project-item" style="background-color:#e96437;">
                            <div class="project-metro-photo"><img src="<?=Yii::getAlias('@web').'/img/'.$row->img?>" alt="" /></div>
                            <div class="project-metro-date"><?=$row->year?></div>
                            <div class="project-metro-detail">
                                <h2 class="project-metro-title font-nexa"><?=$row->title?></h2>
                                <!--<div class="project-metro-category"><?/*=$row->description*/?></div>-->
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
    <!--        <div class="grid-item category-mobile category-animation col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                <a href="single-project-branding.html">
                    <div class="project-item" style="background-color:#e96437;">
                        <div class="project-metro-photo"><img src="img/pic62.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Brole Movies App</h2>
                            <div class="project-metro-category">Mobile App, animation</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-web category-branding col-md-6 col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                <a href="single-project-branding.html">
                    <div class="project-item" style="background-color:#191a1e;">
                        <div class="project-metro-photo"><img src="img/pic63.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Dark Bottle Packagin</h2>
                            <div class="project-metro-category">Branding <span class="divider">&bull;</span> Web Design</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-web col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                <a href="single-project-web-design.html">
                    <div class="project-item" style="background-color:#2b1770;">
                        <div class="project-metro-photo"><img src="img/pic64.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Onne Portfolio Site</h2>
                            <div class="project-metro-category">Website</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-photography category-branding category-web col-md-6 col-lg-8 wow fadeInUp" data-wow-delay=".1s">
                <a href="single-project-web-photography.html">
                    <div class="project-item" style="background-color:#819823;">
                        <div class="project-metro-photo"><img src="img/pic65.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Boranito Skate Store Online</h2>
                            <div class="project-metro-category">Website, Branding, photography</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-branding category-animation col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <a href="single-project-branding.html">
                    <div class="project-item" style="background-color:#b18e36;">
                        <div class="project-metro-photo"><img src="img/pic66.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Rick Meyeres</h2>
                            <div class="project-metro-category">Branding, Motion</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-branding col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                <a href="single-project-branding.html">
                    <div class="project-item" style="background-color:#fa8d18;">
                        <div class="project-metro-photo"><img src="img/pic67.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">ICO Bottle Opener</h2>
                            <div class="project-metro-category">Branding</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-mobile category-animation col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <a href="single-project-mobile-app.html">
                    <div class="project-item" style="background-color:#846d96;">
                        <div class="project-metro-photo"><img src="img/pic68.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Brole Movies App</h2>
                            <div class="project-metro-category">Mobile App, animation</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item category-mobile category-animation col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                <a href="single-project-mobile-app.html">
                    <div class="project-item" style="background-color:#56362e;">
                        <div class="project-metro-photo"><img src="img/pic69.jpg" alt="" /></div>
                        <div class="project-metro-date">2018</div>
                        <div class="project-metro-detail">
                            <h2 class="project-metro-title font-abril">Brole Movies App</h2>
                            <div class="project-metro-category">Mobile App, animation</div>
                        </div>
                    </div>
                </a>
            </div>-->
        </div>

        <div class="more more-lg more-total-lg text-center"><a href="#" class="underline">More project</a></div>
    </div>
</div>
