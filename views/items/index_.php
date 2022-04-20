<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Items';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="section-bg">
    <div class="row">
        <div class="col-12 px-0">
            <!--            <img class="img-fluid" src="https://dummyimage.com/1930x250/000000/222222">-->
            <?= Html::img('img/jury.jpg');?>
        </div>
    </div>
</div>
<!--==========================
  Team Section
============================-->

<!--==========================
  Portfolio Section
============================-->
<section id="items" class="section-bg">
    <div class="container-fluid">
        <header class="section-header">
            <ul  class="gallery">
                <li data-id="letters"><h4>A - Z</h4></li>
                <li data-id="daybyday"><h4>day by day</h4></li>
                <li data-id="sections"><h4>sections</h4></li>
            </ul>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <ul id="items-flters">
                    <li data-filter="*" class="filter-active">All</li>

                    <?php foreach ($letters as $row):?>
                        <li data-filter=".filter-<?=$row->filtercategory?>"><?=$row->filterletter?></li>
                    <?php endforeach;?>
                    <?php foreach ($days as $row):?>
                        <li data-filter=".filter-<?=$row->filtercategory?>"><?=$row->filterday?></li>
                    <?php endforeach;?>
                    <?php foreach ($category as $row):?>
                    <li data-filter=".filter-<?=$row->filtercategory?>"><?=$row->filtercategory?></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php foreach ($items as $row):?>
                <div class="col-lg-2 col-sm-12 wow bounceInUp portfolio-item filter-<?=$row->filtercategory?>" style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">
                    <div class="card  p-3 mb-5">
                        <img class="card-img-top" src="img/team/<?=$row->img?>" alt="Card image cap" style="height: 300px">
                        <div class="card-body">
                            <h4 class=" text-center"><?=$row->title?></h4>
                            <p class="text-center card-title"><?=$row->director?>&nbsp;</p>
                    </div>
                </div>
                </div>
            <?php endforeach;?>
        </div>

    </div>
</section><!-- #portfolio -->


<!--<div style="position: absolute;height: 650px; width: 100%; background-color: #E24145"></div>-->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $(".gallery li").on("click", function(){
            var dataId = $(this).attr("data-id");
            alert("The data-id of clicked item is: " + dataId);
        });
    });

</script>