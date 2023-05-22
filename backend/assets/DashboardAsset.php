<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/classy-nav.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/site.css',
        '/style.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
//        '//code.ionicframwork.com/ionicons/2.0.1/css/ionicons.min.css'
        ];
    public $js = [
        'js/jquery/jquery-2.2.4.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/plugins.js',
        'js/active.js',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $depends = [
//        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset'
    ];
}
