<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 10/1/2019
 * Time: 16:17
 */

namespace app\assets;


class IndexAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/item.css',
        'css/jquery.pagepiling.css',
    ];
    public $js = [

        'js/index.js'

    ];
    public $depends = [
       'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];


}