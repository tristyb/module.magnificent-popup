<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

/* MAGNIFICENT POPUP */

defined('_JEXEC') or die;

JHtml::_('jquery.framework');

//include the class of the helper
require_once(dirname(__FILE__).'/helper.php');

//call the class for items and for jQuery
$items = mod_magnificjoomlaHelper::getItems($params);
$module_id = mod_magnificjoomlaHelper::getModuleId($module);

//add magnificent popup css
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::base(true).'/modules/mod_magnificjoomla/assets/css/magnific-popup.css', 'text/css');

//add scripts
$doc->addScript(JURI::base(true).'/modules/mod_magnificjoomla/assets/js/jquery.magnific-popup.min.js');

//keeps class suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require(JModuleHelper::getLayoutPath('mod_magnificjoomla'));;
