<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAssetPaint extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/admin';
    public $css = [
       // 'https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css',
        'css/bootstrap.min.css',
       ' https://use.fontawesome.com/releases/v5.0.6/css/all.css',
        'css/style.css',
        'css/responsive.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
        'css/bootstrap-touch-slider.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/popup.css',
       
       
    ];
    public $js = [
        'http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
       // 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js',
        'js/bootstrap-touch-slider.js',
        'js/owl.carousel.min.js',
        'js/smk-accordion.js',
        'js/index.js',
        'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js',
       //  'js/main.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
