Star Rating Widget for Yii 2
============================
- Star Rating widget based on Raty extension https://github.com/wbotelhos/raty

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-star-rating "*"
```

or add

```json
"yii2mod/yii2-star-rating": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

1) Usage with ActiveForm and model
```php
   echo $form->field($model, 'attribute')->widget(\yii2mod\rating\StarRating::className(), [
                       'options' => [
                           // Your additional tag options
                       ],
                       'clientOptions' => [
                           // Your client options
                       ]
                   ]); 

  ```

2) Usage without a model
```php
   echo \yii2mod\rating\StarRating::widget([
           'name' => "input_name",
           'value' => 5,
           'clientOptions' => [
               // Your client options
           ]
     ]);
```

Star Rating Options 
-------------------
You can find them on the [options page](https://github.com/wbotelhos/raty#options)
