<?php 
/**
 * @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
*/

namespace backend\assets;

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
    'css/jquery-ui.css',
    'css/fullcalendar.css',
    'css/prettyPhoto.css',
    'css/rateit.css',
    'css/bootstrap-datetimepicker.min.css',
    'css/jquery.gritter.css',
    'css/jquery.cleditor.css',
    'css/bootstrap-switch.css/',
    'css/style.css',
    'css/widgets.css',
    'css/daterangepicker-bs3.css',
    ];
    public $js = [
    'js/jquery.js',
    'js/bootstrap.js',
    'js/jquery-ui-1.10.2.custom.min.js',
    'js/fullcalendar.min.js',
    'js/jquery.rateit.min.js',
    'js/jquery.prettyPhoto.js',
    'js/hoverIntent.js',
    'js/excanvas.min.js',
    'js/jquery.flot.js',
    'js/jquery.flot.resize.js',
    'js/jquery.flot.pie.js',
    'js/jquery.flot.stack.js',
    'js/jquery.gritter.min.js',   
    'js/sparklines.js',        
    'js/jquery.cleditor.min.js',   
    'js/bootstrap-datetimepicker.min.js',   
    '"js/bootstrap-switch.min.js',   
    'js/filter.js',   
    //'js/custom.js',   
    'js/charts.js',   
    'js/jquery.slimscroll.min.js',   
    'js/moment.js',   
    'js/daterangepicker.js',
    'js/thispage/js',
    ];
    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    'frontend\assets\AppAsset',
    ];
}
