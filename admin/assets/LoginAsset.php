<?php

namespace admin\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        "/static/login/css/reset.css",
        "/static/login/css/supersized.css",
        "/static/login/css/style.css",
        "/static/login/css/googleapis.css",
    ];
    public $js       = [
        // "/static/login/js/jquery-1.8.2.min.js",
        "/static/login/js/supersized.3.2.7.min.js",
        "/static/login/js/supersized-init.js",
        "/static/login/js/scripts.js",
    ];
    public $depends  = [
        'admin\assets\AppAsset',
    ];
}
