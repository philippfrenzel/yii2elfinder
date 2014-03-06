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
        'css/common.css'     ,
        'css/dialog.css'     ,
        'css/toolbar.css'    ,
        'css/navbar.css'     ,
        'css/statusbar.css'  ,
        'css/contextmenu.css',
        'css/cwd.css'        ,
        'css/quicklook.css'  ,
        'css/commands.css'   ,
        'css/fonts.css'      ,
        'css/theme.css'      ,
    );
    public $js = array(
        "js/elFinder.js",
        "js/elFinder.version.js",
        "js/jquery.elfinder.js",
        "js/elFinder.resources.js",
        "js/elFinder.options.js",
        "js/elFinder.history.js",
        "js/elFinder.command.js",
        "js/ui/overlay.js",
        "js/ui/workzone.js",
        "js/ui/navbar.js",
        "js/ui/dialog.js",
        "js/ui/tree.js",
        "js/ui/cwd.js",
        "js/ui/toolbar.js",
        "js/ui/button.js",
        "js/ui/uploadButton.js",
        "js/ui/viewbutton.js",
        "js/ui/searchbutton.js",
        "js/ui/sortbutton.js",
        "js/ui/panel.js",
        "js/ui/contextmenu.js",
        "js/ui/path.js",
        "js/ui/stat.js",
        "js/ui/places.js",
        "js/commands/back.js",
        "js/commands/forward.js",
        "js/commands/reload.js",
        "js/commands/up.js",
        "js/commands/home.js",
        "js/commands/copy.js",
        "js/commands/cut.js",
        "js/commands/paste.js",
        "js/commands/open.js",
        "js/commands/rm.js",
        "js/commands/info.js",
        "js/commands/duplicate.js",
        "js/commands/rename.js",
        "js/commands/help.js",
        "js/commands/getfile.js",
        "js/commands/mkdir.js",
        "js/commands/mkfile.js",
        "js/commands/upload.js",
        "js/commands/download.js",
        "js/commands/edit.js",
        "js/commands/quicklook.js",
        "js/commands/quicklook.plugins.js",
        "js/commands/extract.js",
        "js/commands/archive.js",
        "js/commands/search.js",
        "js/commands/view.js",
        "js/commands/resize.js",
        "js/commands/sort.js",
        "js/commands/netmount.js",
        "js/i18n/elfinder.en.js" 
    );
    public $depends = array(
        'yii\jui\CoreAsset',
        'yii\jui\ThemeAsset',
        'yii\jui\EffectAsset',
        'yii\jui\ResizableAsset',
        'yii\jui\DraggableAsset',
        'yii\jui\DroppableAsset',
        'yii\jui\SelectableAsset'
    );
}
