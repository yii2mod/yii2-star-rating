<?php

namespace yii2mod\rating;

use yii\web\AssetBundle;

/**
 * Class StarRatingAsset
 * @package yii2mod\rating
 */
class StarRatingAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/raty';
    /**
     * @var array
     */
    public $css = [
        'lib/jquery.raty.css'
    ];
    /**
     * @var array
     */
    public $js = [
        'lib/jquery.raty.js'
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}