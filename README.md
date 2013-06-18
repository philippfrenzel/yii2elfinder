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

How to install:

Add this to your composer.json require section

```json
  "philippfrenzel/yii2elfinder": "dev-master",
```

Add this to your project index.php

```php

Yii::setAlias('@yii2elfinder', __DIR__ . '/../vendor/philippfrenzel/yii2elfinder/yii2elfinder/');
require_once(__DIR__ . '/../vendor/helios-ag/fm-elfinder/FM/elfinder/php/elFinderConnector.class.php');
require_once(__DIR__ . '/../vendor/helios-ag/fm-elfinder/FM/elfinder/php/elFinder.class.php');
require_once(__DIR__ . '/../vendor/helios-ag/fm-elfinder/FM/elfinder/php/elFinderVolumeDriver.class.php');
require_once(__DIR__ . '/../vendor/helios-ag/fm-elfinder/FM/elfinder/php/elFinderVolumeLocalFileSystem.class.php');

```

After that add into your controller the following function

```php
public function actions()
  {
    return array(
      'connector' => array(
        'class' => 'yii2elfinder\ConnectorAction',
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
