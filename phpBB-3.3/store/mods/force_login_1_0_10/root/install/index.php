<?php
/**
*
* @package phpBB3
* @version $Id$
* @version $Id: index.php v 1.0.10 2009/01/24 18:00:00 xceler8shun Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Borrowed from evil3 troll mod
*/

/**
*/

/**
* @ignore
*/

define('IN_PHPBB', true);
define('IN_INSTALL_FORCE_LOGIN', true);
define('DEBUG', true);
define('DEBUG_EXTRA', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('acp/common', 'install'));
$user->add_lang('mods/force_login');

// We cant require admin level access to run the mod as we have changed the login script and users will be unable to login until the install script in executed.
// Otherwise we would enable the removed code below...
// Have they authenticated (again) as an admin for this session?
if (!isset($user->data['session_admin']) || !$user->data['session_admin'])
{
	login_box('', $user->lang['LOGIN_ADMIN_CONFIRM'], $user->lang['LOGIN_ADMIN_SUCCESS']);
}

// Is user any type of admin? No, then stop here, each script needs to
// check specific permissions but this is a catchall
if (!$auth->acl_get('a_'))
{
	trigger_error('NO_ADMIN');
}

// check for minimum php version
//if (version_compare(PHP_VERSION, '5.0.0') < 0)
//{
//	trigger_error('The  MOD requires a minimum PHP version of 5.0.0.', E_USER_WARNING);
//}

// some more includes
include($phpbb_root_path . 'install/functions_install.' . $phpEx);
include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);

// setup db tools
$db_tools = new phpbb_db_tools($db);

// Set custom template for admin area
$template->set_custom_template($phpbb_root_path . 'install/style', 'install');
$template->assign_var('T_TEMPLATE_PATH', $phpbb_root_path . 'install/style');

$mode = request_var('mode', '');

$force_login_version = '1.0.10';

// init
$error = array();

$page_body = '';
$page_body .= $user->lang['FORCE_LOGIN_MOD_EXPLAIN'] . '<br /><br />';

switch ($mode)
{
	case 'delete':

	    if (!is_writable("{$phpbb_root_path}install/"))
	    {
	        $page_body .= $user->lang['CANNOT_DELETE'] . '<br /><br />';
			$page_body .= sprintf($user->lang['RETURN_INSTALL'], '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx") . '">', '</a>');
			break;
		}

		// attempt to delete the file itself
		delete_dir($phpbb_root_path . 'install/');
		redirect("{$phpbb_root_path}index.$phpEx");

	break;

	case 'install':

		if (isset($config['force_login_version']))
		{
			$page_body .= $user->lang['ALREADY_INSTALLED'] . '<br /><br />';
			$page_body .= sprintf($user->lang['RETURN_INSTALL'], '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx") . '">', '</a>');
			break;
		}

		$install_data = array(
			'install_modules'	=> array(
				array('acp', 'acp_force_login', 'ACP_CAT_GENERAL'),
			),
			'set_config'		=> array(
 				array('allow_force_login', '0', '0'),
 				array('allow_force_login_bots', '0', '0'),
 				array('allow_force_login_index', '0', '0'),
				array('allow_force_login_viewtopic', '0', '0'),
 				array('allow_force_login_viewforum', '0', '0'),
 				array('allow_force_login_search', '0', '0'),
 				array('allow_force_login_faq', '0', '0'),
 				array('allow_force_login_custom', '0', '0'),
 				array('force_login_version', '0', '0'),
				
			),
		);


		process_install($install_data, $error, $db_tools);

		$page_body .= '<br /><br />';
		$page_body .= $user->lang['FORCE_LOGIN_MOD_INSTALLED'] . '<br /><br />';
		$page_body .= sprintf($user->lang['RETURN_INSTALL'], '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx") . '">', '</a>');

		set_config('force_login_version', $force_login_version);

		// purge cache
		$cache->purge();
		$auth->acl_clear_prefetch();
		add_log('admin', 'LOG_MODULE_ADD', $user->lang['ACP_FORCE_LOGIN']);		

	break;
	
	case 'update':

		$update_data = array(
			'1.0.10'	=> array(

				'install_modules'	=> array(
					array('acp', 'acp_force_login', 'ACP_CAT_GENERAL'),			
				),
				'set_config'		=> array(
 					array('allow_force_login', '0', '0'),
 					array('allow_force_login_bots', '0', '0'),
 					array('allow_force_login_index', '0', '0'),
					array('allow_force_login_viewtopic', '0', '0'),
 					array('allow_force_login_viewforum', '0', '0'),
 					array('allow_force_login_search', '0', '0'),
 					array('allow_force_login_faq', '0', '0'),
 					array('allow_force_login_custom', '0', '0'),
 					array('force_login_version', '1.0.10'),
				),
			),
		);

		if (!isset($config['force_login_version']) || !version_compare($config['force_login_version'], $force_login_version, '<'))
		{
			$page_body .= $user->lang['ALREADY_NOT_INSTALLED'] . '<br /><br />';
			$page_body .= sprintf($user->lang['RETURN_INSTALL'], '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx") . '">', '</a>');
			break;
		}

		foreach ($update_data as $update_version => $update_ary)
		{
			// if our version is bigger, skip
			if (!version_compare($config['force_login_version'], $update_version, '<'))
			{
				continue;
			}

			process_install($update_ary, $error, $db_tools);
		}

		$page_body .= '<br /><br />';
		$page_body .= sprintf($user->lang['FORCE_LOGIN_MOD_UPDATED'], $config['force_login_version']) . '<br /><br />';
		$page_body .= sprintf($user->lang['RETURN_INSTALL'], '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx") . '">', '</a>');

		set_config('force_login_version', $force_login_version);

		// purge cache
		$cache->purge();

	break;
	

	default:

		$page_body .= '<br /><br />';

		if (!isset($config['force_login_version']))
		{
			$page_body .= '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=install') . '">&raquo; ' . $user->lang['INSTALL'] . '</a><br />';
		}
		else if (version_compare($config['force_login_version'], $force_login_version, '<'))
		{
			$page_body .= '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update') . '">&raquo; ' . $user->lang['UPDATE'] . '</a><br />';
		}
		else
		{
			$page_body .= $user->lang['NOTHING_TO_INSTALL'] . '<br /><br />';
			$page_body .= sprintf($user->lang['RETURN_INDEX'], '<a href="' . append_sid("{$phpbb_root_path}index.$phpEx") . '">', '</a>');

			if (is_writable("{$phpbb_root_path}install/"))
			{
				$page_body .= '<br /><br />' . sprintf($user->lang['DELETE_SELF'], '<a href="' . append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=delete') . '">', '</a>');
			}
		}

	break;
}

// Assign index specific vars
$template->assign_vars(array(
	'TITLE'	=> $user->lang['FORCE_LOGIN_MOD'],
	'BODY'	=> $page_body,
));

// Output page
page_header($user->lang['INSTALL_PANEL']);

$template->set_filenames(array(
	'body' => 'install_main.html')
);

page_footer();

?>
