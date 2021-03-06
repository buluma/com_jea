<?php
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 *
 * @version     $Id$
 * @package     Joomla.Administrator
 * @subpackage  com_jea
 * @copyright   Copyright (C) 2008 - 2012 PHILIP Sylvain. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// Include dependancies
jimport('joomla.application.component.controller');

$input = JFactory::getApplication()->input;

if ($input->getCmd('task') == '') {
    // In order to execute controllers/default.php as default controller
    // and display as default method
    $input->set('task', 'default.display');
}

$controller = JControllerLegacy::getInstance('jea');
$controller->execute($input->getCmd('task'));
$controller->redirect();
