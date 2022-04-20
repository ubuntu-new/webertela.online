<?php

namespace app\assets;


class WorksAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'js/work.js'
    ];
    public $depends = [
       'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapAsset',
    ];


}