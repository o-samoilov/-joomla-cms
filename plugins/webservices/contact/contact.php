<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Webservices.Contact
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Router\ApiRouter;

/**
 * Web Services adapter for com_contact.
 *
 * @since  4.0.0
 */
class PlgWebservicesContact extends CMSPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  4.0.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * Registers com_contact's API's routes in the application
	 *
	 * @param   ApiRouter  &$router  The API Routing object
	 *
	 * @return  void
	 *
	 * @since   4.0.0
	 */
	public function onBeforeApiRoute(&$router)
	{
		$router->createCRUDRoutes('v1/contact', 'contact', ['component' => 'com_contact']);
		$router->createCRUDRoutes('v1/contact/categories', 'categories', ['component' => 'com_categories', 'extension' => 'com_contact']);
	}
}
