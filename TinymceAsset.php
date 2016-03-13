<?php

namespace kuakling\tinymce;


use yii\web\AssetBundle;

class TinymceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kuakling/yii2-tinymce-responsivefilemanager/assets';
    public $js = [
        'tinymce/tinymce.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}
