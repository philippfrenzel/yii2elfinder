<?php

 /**
 * This class is merely used to publish a TOC based upon the headings within a defined container
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 *
 * don't forget to add the classmap to your index file!
 *
 * Original yii version by
 * @author z_bodya
 */

namespace yii2elfinder;

// error_reporting(0);
ini_set('max_file_uploads', 50); // allow uploading up to 50 files at once

// needed for case insensitive search to work, due to broken UTF-8 support in PHP
ini_set('mbstring.internal_encoding', 'UTF-8');
ini_set('mbstring.func_overload', 2);

if (function_exists('date_default_timezone_set')) {
	date_default_timezone_set('Europe/Berlin');
}

require_once(__DIR__ . '/php/elFinderConnector.class.php');
require_once(__DIR__ . '/php/elFinder.class.php');
require_once(__DIR__ . '/php/elFinderVolumeDriver.class.php');
require_once(__DIR__ . '/php/elFinderVolumeLocalFileSystem.class.php');

/**
* Simple function to demonstrate how to control file access using "accessControl" callback.
* This method will disable accessing files/folders starting from '.' (dot)
*
* @param string $attr attribute name (read|write|locked|hidden)
* @param string $path file path relative to volume root directory started with directory separator
* @return bool|null
**/
function access($attr, $path, $data, $volume) {
	return strpos(basename($path), '.') === 0 // if file/folder begins with '.' (dot)
	? !($attr == 'read' || $attr == 'write') // set read+write to false, other (locked+hidden) set to true
	: null; // else elFinder decide it itself
}


use Yii;
use \yii\base\Action;

use elFinder;
use elFinderConnector;

class ConnectorAction extends Action
{
    /**
     * @var array
     */
    public $clientOptions = array();

    public function run()
    {
        $fm = new elFinderConnector(new elFinder($this->clientOptions));
        $fm->run();

    }
}
