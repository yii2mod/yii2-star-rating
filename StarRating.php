<?php

namespace yii2mod\rating;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class StarRating
 *
 * @package yii2mod\rating
 */
class StarRating extends InputWidget
{
    /**
     * Path to plugin images
     */
    public $assetBundleImagePath = '/lib/images';

    /**
     * @var array client options
     */
    public $clientOptions = [];

    /**
     * Init widget, configure client options
     */
    public function init()
    {
        parent::init();

        $this->configureClientOptions();
    }

    /**
     * Render star rating
     *
     * @return string
     */
    public function run()
    {
        $this->registerAssets();

        return Html::tag('div', '', $this->options);
    }

    /**
     * Register client assets
     *
     * return @void
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        $clientOptions = Json::encode($this->clientOptions);
        $js = 'jQuery("div#' . $this->options['id'] . '").raty(' . $clientOptions . ');';
        $view->registerJs($js);
    }

    /**
     * Configure client options
     */
    protected function configureClientOptions()
    {
        $assetBundle = StarRatingAsset::register($this->view);

        if (!isset($this->clientOptions['score'])) {
            $this->clientOptions['score'] = $this->hasModel() ? Html::getAttributeValue($this->model, $this->attribute) : $this->value;
        }

        if (!isset($this->clientOptions['path'])) {
            $this->clientOptions['path'] = $assetBundle->baseUrl . $this->assetBundleImagePath;
        }

        if (!isset($this->clientOptions['scoreName']) && $this->hasModel()) {
            $this->clientOptions['scoreName'] = Html::getInputName($this->model, $this->attribute);
        }
    }
}
