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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/font-awesome/css/font-awesome.min.css',
        'lib/animate/animate.min.css',
        'lib/ionicons/css/ionicons.min.css',
        'lib/owlcarousel/assets/owl.carousel.min.css',
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css',
        'lib/lightbox/css/lightbox.min.css',
        'css/style.css',
        'css/maxResponcive.css'
    ];
    public $js = [
       // 'lib/jquery/jquery.min.js',
        // 'lib/jquery/jquery-migrate.min.js',
        'lib/bootstrap/js/bootstrap.bundle.min.js',
        'lib/easing/easing.min.js',
        'lib/mobile-nav/mobile-nav.js',
        'lib/wow/wow.min.js',
        'lib/waypoints/waypoints.min.js',
        'lib/counterup/counterup.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'lib/isotope/isotope.pkgd.min.js',
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js',
        'lib/lightbox/js/lightbox.min.js',
        'js/main.js'


    ];
    public $depends = [
        /*        'yii\web\YiiAsset',
                'yii\bootstrap\BootstrapAsset',*/
    ];
}
