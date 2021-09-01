<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/main2.css',
        'css/lain.css',
        'css/webfonts/all.min.css',
        'css/elite/morris.css',
        'css/elite/jquery.toast.css',
        'css/elite/style.min.css',
        'css/elite/dashboard1.css',
    ];
    public $js = [
        'js/elite/waves.js',
        'js/elite/sidebarmenu.js',
        'js/elite/custom.min.js',
        'js/elite/dashboard1.js',
        'js/elite/perfect-scrollbar.jquery.min.js',
        'js/elite/jquery-3.2.1.min.js',
        'js/elite/popper.min.js',
        'js/elite/bootstrap.min.js',
        'js/elite/raphael-min.js',
        'js/elite/morris.min.js',
        'js/elite/jquery.sparkline.min.js',
        // 'js/elite/jquery.toast.js',
        'js/clock.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
