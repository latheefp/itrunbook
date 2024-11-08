<?php

/**
*
 * @author hubaishan (Saeed Hubaishan) hubaishan@yahoo.com
 * @version $Id$
 * @copyright (c) 2011 hubaishan (msofficeword.net)
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}


// The name of the mod to be displayed during installation.
$mod_name = 'Hijri Calendar';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'hijri_calendar_version';
/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	'1.0.0' => array(
		'custom' => 'hc_module',
	),
);

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);
/*
* Here is our custom function that will be called
*
* @param string $action The action (install|update|uninstall) will be sent through this.
* @param string $version The version this is being run for will be sent through this.
*/
function hc_module($action, $version)
{
	global $db, $umil;

	if ($action == 'install')
	{
		// Run this when installing
		$umil->table_column_update('phpbb_users', 'user_dateformat', array('VCHAR:50', "|D _j-_M-_Y= j-n-Y|, g:i a"));
		$umil->config_update('default_dateformat', '|D _j-_M-_Y\a\h, j-n-Y\a\d|, g:i a');
		return 'Hijri_calendar_INSTALL_DONE';
	}
	if ($action == 'uninstall')
   {
      $sql = "UPDATE " . USERS_TABLE . " SET user_dateformat = 'd M Y H:i' WHERE user_dateformat LIKE '%\_%'";
		$db->sql_query($sql);			
		$umil->table_column_update('phpbb_users', 'user_dateformat', array('VCHAR:30', 'd M Y H:i'));
		$umil->config_update('default_dateformat', 'd M Y H:i');
	}
}

?>