<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use app\models\Accformedia;
//$this->title = Yii::t('menu','Accreditation for Film Professionals');
//$this->params['breadcrumbs'][] = $this->title;

?>
<style>
    .control-label
    {
        font-family: BebasNeueRegular;
    }
</style>
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
    $font_size = '32px !important';
    $font_size_small = '1.3vw !important';
    $font_size_movie_title = '1.5rem !important';
    $font_size_movie_desc = '1.2rem !important';
    $font_size_dir = '0.6vw !important';
    $font_size_big = '4rem';
    $dinLight = 'bpgAlgeti !important';
}
?>
<section id="acreditation" class="section-bg">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg',['class'=>'img-fluid']);?>
        </div>
    </div>
</div>
<div class="container min-vh-100">
    <div class="row mt-5">
        <div class="col-md-4 col-sm-12 my-auto">
            <?php foreach ($mediatxt as $item): ?>
                <?php
                if ($lang_id == 'ka-GE'){
                    $title = $item["title_ge"];
                    $description = $item["description_ge"];
                }

                if ($lang_id == 'en-US'){
                    $title = $item["title"];
                    $description = $item["description"];
                }
                ?>
                <h1 class="mt-5" id="maintitle" style="font-size: <?=$font_size?>;color: #E24145 !important;font-family: <?=$font_family?>; "><?=$title?></h1>
                <span  class="mb-3" style="font-family: <?=$dinLight?>"><?=$description?></span>
            <?php endforeach;?>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="form">

                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Saved!</h4>
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>
                <?php if (Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Error</h4>
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
                <div class="team-form">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>