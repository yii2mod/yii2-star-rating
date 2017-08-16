<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Star Rating Widget for Yii 2</h1>
    <br>
</p>

Star Rating widget based on Raty extension https://github.com/wbotelhos/raty

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-star-rating/v/stable)](https://packagist.org/packages/yii2mod/yii2-star-rating) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-star-rating/downloads)](https://packagist.org/packages/yii2mod/yii2-star-rating) [![License](https://poser.pugx.org/yii2mod/yii2-star-rating/license)](https://packagist.org/packages/yii2mod/yii2-star-rating)

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-star-rating "*"
```

or add

```
"yii2mod/yii2-star-rating": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

1) Usage with ActiveForm and model
```php
echo $form->field($model, 'attribute')->widget(\yii2mod\rating\StarRating::class, [
    'options' => [
        // Your additional tag options
    ],
    'clientOptions' => [
        // Your client options
    ],
]);
```

2) Usage without a model
```php
echo \yii2mod\rating\StarRating::widget([
    'name' => 'input_name',
    'value' => 5,
    'clientOptions' => [
       // Your client options
    ],
 ]);
```

Star Rating Options 
-------------------
You can find them on the [options page](https://github.com/wbotelhos/raty#options)
