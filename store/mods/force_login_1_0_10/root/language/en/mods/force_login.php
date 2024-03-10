<?php
/** 
*
* posting [English]
*
* @package language
* @version $Id: force_login.php v 1.0.10 2009/01/24 18:00:00 xceler8shun Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_FORCE_LOGIN'			=> 'Force Login Settings',
	'ACP_FORCE_LOGIN_EXPLAIN'	=> 'Here you can enable or disable Force Login completely, selectively enable / disable the pages you require if Force Login is enabled and even select if you wish to force Bots to login.',
	
// ACP block
	'ALLOW_FORCE_LOGIN'							=> 'Enable Force Login on the Board',
	'ALLOW_FORCE_LOGIN_EXPLAIN'					=> 'Determines whether the modification is enabled or disabled for the Board.',
													
	'ALLOW_FORCE_LOGIN_BOTS'					=> 'Enable Force Login for Bots',
	'ALLOW_FORCE_LOGIN_BOTS_EXPLAIN'			=> '<strong>WARNING:</strong> Enabling this option will also force "Bots" to login, which will effectively stop them from being able to index or crawl the Board.',
													
	'ALLOW_FORCE_LOGIN_INDEX'					=> 'Enable Force Login on index.php',
	'ALLOW_FORCE_LOGIN_VIEWTOPIC'				=> 'Enable Force Login on viewtopic.php',
	'ALLOW_FORCE_LOGIN_VIEWFORUM'				=> 'Enable Force Login on viewforum.php',
	'ALLOW_FORCE_LOGIN_SEARCH'					=> 'Enable Force Login on search.php',
	'ALLOW_FORCE_LOGIN_FAQ'						=> 'Enable Force Login on faq.php',
	'ALLOW_FORCE_LOGIN_CUSTOM'					=> 'Enable Force Login on custom pages',
	
// Install block
	'NO_FILES_MODIFIED'							=> 'You haven\'t modified the files according to the Force Login MOD installation instruction.',
	'NO_FOUNDER'								=> 'You need to be a Board founder to install this modification',
	'FORCE_LOGIN_MOD'							=> 'Force Login',
	'FORCE_LOGIN_MOD_EXPLAIN'					=> 'The "Force Login on index.php" MOD will force user login on index.php, viewtopic.php, viewforum.php, search.php, faq.php
													 and / or custom.php files. 
													<br /> The MOD can be enabled and disabled via the ACP, along with enabling or disabling which pages are used',
	'FORCE_LOGIN_MOD_INSTALLED'					=> 'The Force Login modification has been installed successfully. Please remove the install directory from your server.',
	'FORCE_LOGIN_MOD_UPDATED'					=> 'The Force Login modification has been updated to version %s successfully.',
	'ALREADY_INSTALLED'							=> 'The Force Login modification has already been installed.',
	'ALREADY_NOT_INSTALLED'						=> 'The Force Login modification hasn´t been installed yet or is up to date.',
	'NOTHING_TO_INSTALL'						=> 'There is nothing left for you to do except delete the install folder.',
	'CANNOT_DELETE'     					    => 'It´s not possible to delete the install folder, please delete it manually.',

	// return messages
	'DELETE_SELF'								=> '%sAttempt to delete the install folder%s',
	'RETURN_INSTALL'							=> '%sReturn to the Installation Panel%s',
	

	
));

?>