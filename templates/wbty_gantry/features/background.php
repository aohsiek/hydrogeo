<?php
/**
* @version   $Id: logo.php 2381 2012-08-15 04:14:26Z btowles $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*
* Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
*
*/

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeaturebackground extends GantryFeature {
    var $_feature_name = 'background';

    function isEnabled() {
        /** @var $gantry Gantry */
		global $gantry;
        $bg_enabled = $this->get('enabled');

        if (1 == (int)$bg_enabled) return true;
        return false;
    }

	function init() {
        /** @var $gantry Gantry */
		global $gantry;
		$browser = $gantry->browser;

        // Colors
		$background = json_decode(str_replace("&quot;", '"', str_replace("'", '"', $this->get('bgimage'))));
		if ($background->path) {
	        $css = 'body {background: url(\''.JURI::root(true).'/'.$background->path.'\') top center no-repeat '.$this->get('bgcolor').'; background-size:100%}';
		} else {
	        $css = 'body {background-color:'.$this->get('bgcolor').';}';
		}

        $gantry->addInlineStyle($css);
	}
}