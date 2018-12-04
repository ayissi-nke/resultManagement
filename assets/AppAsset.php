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
 * @author JOEL NARCISSE & abebo
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/nprogress.css',
        'css/green.css',
        'css/bootstrap-progressbar-3.3.4.min.css',
        'css/jqvmap.min.css',
        'css/select2.min.css',
        'css/switchery.min.css',
        'css/starrr.css',

        'css/daterangepicker.css',
        'css/custom.min.css',
        'animate.min.css',
        'css/site.css',
    ];
    public $js = [
      /*  'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/fastclick.js',
        'js/nprogress.js',
        'js/Chart.min.js',
        'js/guage.min.js',
        'js/bootstrap-progressbar.min.js',
        'js/icheck.min.js',
        'js/skycons.js',
        'js/jquery.flot.js',
        'js/jquery.flot.pie.js',
        'js/jquery.flot.time.js',
        'js/jquery.flot.stack.js',
        'js/jquery.flot.resize.js',
        'js/jquery.flot.orderBars.js',
        'js/jquery.flot.spline.min.js',
        'js/curvedLines.js',
        'js/date.js',
        'js/jquery.vmap.js',
        'js/jquery.vmap.world.js',
        'js/jquery.vmap.sampledata.js',
        'js/moment.min.js',
        'js/daterangepicker.js',
        'js/bootstrap-wysiwyg.min.js',
        'js/custom.min.js',  */

        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/fastclick.js',
        'js/nprogress.js',
        'js/Chart.min.js',
        'js/guage.min.js',
        'js/bootstrap-progressbar.min.js',
        'js/icheck.min.js',
        'js/skycons.js',
        'js/jquery.flot.js',
        'js/jquery.flot.pie.js',
        'js/jquery.flot.time.js',
        'js/jquery.flot.stack.js',
        'js/jquery.flot.resize.js',
        'js/jquery.flot.orderBars.js',
        'js/jquery.flot.spline.min.js',
        'js/curvedLines.js',
        'js/date.js',
        'js/jquery.vmap.js',
        'js/jquery.vmap.world.js',
        'js/jquery.vmap.sampledata.js',
        'js/moment.min.js',
        'js/daterangepicker.js',
        'js/bootstrap-wysiwyg.min.js',
        'js/jquery.hotkeys.js',
         'js/jquery.tagsinput.js',
        'js/switchery.min.js',
        'js/select2.full.min.js',
         'js/parsley.min.js',
        'js/autosize.min.js',
        'js/starrr.js',
        'js/custom.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
