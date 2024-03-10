<?php
/**
*
* @package acp
* @version $Id: force_login_check_version.php v 1.0.10 2009/01/24 18:00:00 xceler8shun Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package Force Login
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class force_login_check_version
{
	function version()
	{
		return array(
			'author'	=> 'xceler8shun',
			'title'		=> 'Force Login',
			'tag'		=> 'force_login',
			'version'	=> '1.0.10',
			'file'		=> array('nouveauwebdesign.com.au', 'phpbbmods', 'force_login.xml'),
		);
	}
}

?>