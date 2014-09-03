<?php 
/**
 * @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
*/

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'css/jasny-bootstrap.css',
    'css/style.css',
    'css/prettyPhoto.css',
    'css/sequencejs.css',
    ];
    public $js = [
    'js/jasny-bootstrap.min.js',
    'js/jquery-migrate-1.1.1.js',
    'js/sequence.jquery-min.js',
    'js/sequencejs-options.js',
    'js/jquery.easing.1.3.js',
    'js/superfish.js',
    'js/hoverIntent.js',
    'js/jquery.flexslider.js',
    'js/jquery.prettyPhoto.js',
    'js/jquery.elastislide.js',
    'js/smoothscroll.js',
    'js/main.js',        
    ];
    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    'frontend\assets\AppAsset',
    ];
}
