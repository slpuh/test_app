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
        'css/style.css',
        'css/bootstrap.min.css',
        'css/themify-icons.css',
        'css/font-awesome.min.css',
        'css/googleapisRoboto.css',
        
    ];
    public $js = [  
        'js/jquery-3-3-1.min.js',
        'js/bootstrap-4-2-1.min.js'
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
