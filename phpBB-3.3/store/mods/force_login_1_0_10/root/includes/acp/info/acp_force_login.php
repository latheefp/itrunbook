<?php
/** 
*
* @package acp
* @version $Id: acp_force_login.php,v 1.0.10 2009/01/24 18:00:00 xceler8shun Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_force_login_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_force_login',
			'title'		=> 'ACP_FORCE_LOGIN',
			'version'	=> '1.0.9',
			'modes'		=> array(
			'force_login'		=> array('title' => 'ACP_FORCE_LOGIN', 'auth' => 'acl_a_board', 'cat' => array('ACP_BOARD_CONFIGURATION')),

			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>