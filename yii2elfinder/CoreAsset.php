<?php

namespace yii2elfinder;

use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@yii2elfinder/assets';
    public $css = array(
        'css/elfinder.full.css',
        'css/smoothness/jquery-ui-1.10.3.custom.css'
    );
    public $js = array(
        'js/elfinder.full.js',
        'js/i18n/elfinder.de.js',
    );
    public $depends = array(
        'yii\jui\CoreAsset',
        'yii\jui\CoreThemeAsset',
        'yii\jui\EffectAsset',
        'yii\jui\ResizableAsset'.
        'yii\jui\DraggableAsset',
        'yii\jui\DroppableAsset',
        'yii\jui\SelectableAsset'
    );
}
