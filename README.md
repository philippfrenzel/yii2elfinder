yii2elfinder
============

Thanks to:
https://github.com/Studio-42/elFinder

Thanks to:
zybodya for the current yii version

yii2elfinder
============

Intro: The old version could not be used, as it's completly not working with the latest jquery version! So
apart from the action, i had to change everything;)

This extension allows you to integrate ElFinder file manager into your Yii web site's pages. Comparing with elfinder-widget extension this one is implemented with an attempt to provide a more flexible way to configure both ElFinder's client and connector. The extension also relies on the latest release of ElFinder 2.0-rc1 (10th of April, 2012).

How to install:

Add this to your composer.json require section

```json
  "philippfrenzel/yii2elfinder": "dev-master",
```

After that add into your controller the following function

```php
public function actions()
  {
    return array(
      'connector' => array(
        'class' => 'yii2elfinder\ConnectorAction',
        'clientOptions'=>array(
          'locale' => '',
          'debug'  => false,
            'roots'  => array(
                array(
                    'driver' => 'LocalFileSystem',
                    'path'   => dirname(__DIR__).'/../www/img/cms/',
                    'URL'    => '',
                )
            )   
        )
      )
    );
  }
```

And finaly the view should look like this:

```php

use yii\helpers\Html;
use yii2elfinder\yii2elfinder;

/**
 * @var yii\base\View $this
 */

$this->title = 'File Manager';

?>

<h1><?php echo Html::encode($this->title); ?></h1>

<?php
echo yii2elfinder::widget(
  array(
    'connectorRoute' => 'site/connector',
  )
);
?>
```
