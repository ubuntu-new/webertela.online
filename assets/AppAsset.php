<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/animsition.min.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/socicon.css',
        'css/ionicons.min.css',
        'css/animate.min.css',
        'css/jquery.fancybox.min.css',
        'css/style.css',

    ];
    public $js = [
       'https://code.jquery.com/jquery-1.12.4.min.js',
       'js/smoothscroll.js',
       'js/popper.min.js',
       'js/bootstrap.min.js',
       'js/animsition.min.js',
       'js/owl.carousel.min.js',
       'js/wow.min.js',
       'js/jquery.pagepiling.min.js',
       'js/isotope.pkgd.min.js',
       'js/jquery.fancybox.min.js',
       'js/TweenMax.min.js',
       'js/ScrollMagic.min.js',
       'js/animation.gsap.min.js',
       'js/jquery.viewport.js',
       'js/jquery.countdown.min.js',
       'js/script.js',
    ];
    public $depends = [
/*        'yii\web\YiiAsset',
          'yii\bootstrap\BootstrapAsset',*/
    ];
}
