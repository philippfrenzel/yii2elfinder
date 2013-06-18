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

use Yii;
use \yii\base\Action;

use \helios-ag\elFinder;

class ConnectorAction extends Action
{
    /**
     * @var array
     */
    public $clientOptions = array();

    public function run()
    {
        $fm = new elFinder($this->clientOptions);
        $fm->run();

    }
}
