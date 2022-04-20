<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Items';

//$this->params['breadcrumbs'][] = $this->title;

use app\assets\ItemAsset;

ItemAsset::register($this);
?>



<!--==========================
  Portfolio Section
============================-->
<section id="items" class="section-bg" style="position: relative;">
<div class="container-fluid " style="background-color: #E24145"">
    <div class="row">
        <div class="col-sm-12">
            <div class="container p-0">
                <div class="row mt-5 p-0">
                    <div class="col-sm-12 p-0">
                        <div class="section-header " style="background-color:  #E24145">
                            <ul class="gallery  pl-0">
                                <li data-id="letters" onclick="jQuery.ajax();"><h3>A - Z</h3></li>
                                <li data-id="daybyday"><h3>day by day</h3></li>
                                <li data-id="sections"><h3>sections</h3></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="position: absolute;height: 650px; width: 100%; background-color: #E24145"></div>

<div class="container-fluid" style="background-color: #E24145">
    <div class="row">
        <div class="col-sm-12">
            <div class="container p-0">
                <div class="row p-0">
                    <div class="col-sm-12 p-0">
                        <ul id="portfolio-flters" class="p-0">
                            <li data-filter="*" class="filter-active">All</li>
                            <?php foreach ($letters as $row): ?>
                                <li class="letters"
                                    data-filter=".filter-<?= $row->filterletter ?>"><?= $row->filterletter ?></li>
                            <?php endforeach; ?>
                            <?php foreach ($days as $row): ?>
                                <li class="daybyday" data-filter=".filter-<?= $row->filterday ?>"><?= $row->filterday ?></li>
                            <?php endforeach; ?>
                            <?php foreach ($category as $row): ?>
                                <li class="sections "
                                    data-filter=".filter-<?= $row->filtercategory ?>"><?= $row->filtercategory ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background-color: #E24145">
    <div class="row">
        <div class="col-sm-12  p-0">
            <div class="container  p-0">
                <div class="row mt-5  p-0 portfolio-container ">
                    <?php foreach ($array as $row): ?>
                        <div class="col-md-3 col-sm-12 wow bounceInUp portfolio-item filter-<?= $row["items"]["filtercategory"] ?> filter-<?= $row["items"]["filterday"] ?> filter-<?= $row["items"]["filterletter"] ?>"
                             style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                            <div class="card  p-3 mb-5" style="height: 500px;">
                                <a data-fancybox class="fancyboxedit" data-src="#animatedModals<?= $row["items"]["id"] ?>"
                                   href="javascript:;">
                                    <img class="card-img-top mx-auto d-block img-fluid"
                                         src="<?= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] ?>"
                                         onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>"
                                         alt="Card image cap" style="max-width: 280px; height: 400px;">
                                    <div class="card-body">
                                        <h4 class="text-center"><?= $row["items"]["title"] ?></h4>
                                        <p class="text-center card-title"><?= $row["items"]["director"] ?>&nbsp;</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div style="display: none; border-radius: 0px !important; padding: 0px !important; overflow: auto"
                             id="animatedModals<?= $row["items"]["id"] ?>" class="animated-modal modaluriza">

                            <div class="row">
                                <div class="col-md-3 col-sm-12 p-0">
                                    <img class="card-img-top mx-auto d-block img-fluid"
                                         src="<?= Yii::getAlias('@web') . '/img/store/' . $row["items"]["filePath"] ?>"
                                         onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>"
                                         alt="Card image cap" >
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <h1><?= $row["items"]["title"] ?></h1>
                                    <?php
                                    if ($row["items"]["iscolored"] == '0') {
                                        $iscolored = 'Color';
                                    } elseif ($row["items"]["iscolored"] == '1') {
                                        $iscolored = 'Blach & White';
                                    }
                                    ?>
                                    <h3 class="pt-3"><?= $iscolored ?> / <?= $row["items"]["duration"] ?> <?= Yii::t('items', 'Min'); ?></h3>
                                    <p><?= $row["items"]["description"] ?></p>

                                    <h3 class="pt-3"><?= Yii::t('items', 'Production'); ?></h3>
                                    <p><?= $row["items"]["production"] ?></p>


                                    <h3 class="pt-3"><?= Yii::t('items', 'Director'); ?></h3>
                                    <div class="row p-0 mt-3">
                                        <?php foreach ($row["directors"] as $director) { ?>
                                            <div class="col-md-4 col-sm-12  pt-2">
                                                <img class="d-block img-fluid" style="max-width: 120px; max-height: 120px; float: left; padding-right: 10px; "
                                                     src="<?= Yii::getAlias('@web') . '/img/store/' . $director["filePath"] ?>"
                                                     onerror=this.src="<?= Yii::getAlias('@web') . '/img/no-image.jpg' ?>">
                                                <h4><?= $director["title"] ?>&nbsp;</h4>
                                                <p><?= $director["description"] ?>&nbsp;</p>
                                            </div>
                                        <?php } ?>
                                    </div>
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
