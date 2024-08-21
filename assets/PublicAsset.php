<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot/markup';
    public $baseUrl = '@web/markup';
    public $css = [
        "assets/css/bootstrap.min.css",
        "assets/css/font-awesome.min.css",
        "assets/css/animate.min.css",
        "assets/css/owl.carousel.css",
        "assets/css/owl.theme.css",
        "assets/css/owl.transitions.css",
        "assets/css/style.css",
        "assets/css/responsive.css"
    ];
    public $js = [
        "public/js/jquery-1.11.3.min.js",
        "public/js/bootstrap.min.js",
        "public/js/owl.carousel.min.js",
        "public/js/jquery.stickit.min.js",
        "public/js/menu.js",
        "public/js/scripts.js",
    ];
    public $depends = [
        

    ];
}
