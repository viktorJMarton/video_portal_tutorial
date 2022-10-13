<?php

namespace backend\assets;
use yii;
use yii\web\AssetBundle;
;


/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
  
    public $css = [
        'css/site.css',
    ];

    public $js = [
        "app.js",

    ]; 
    
    
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
      
    ];
  

   
   
}
