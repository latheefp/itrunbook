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
* @package acp
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_force_login
{
	var $u_action;

	function main($id, $mode)
	{


		global $user, $template;
		global $config;
			
		$action	= request_var('action', '');
		$submit = (isset($_POST['submit'])) ? true : false;

		$form_key = 'acp_board';
		add_form_key($form_key);

		if ($mode != 'force_login')
		{
			return;
		}
	
		/**
		*	Validation types are:
		*		string, int, bool,
		*		script_path (absolute path in url - beginning with / and no trailing slash),
		*		rpath (relative), rwpath (realtive, writable), path (relative path, but able to escape the root), wpath (writable)
		*/
		$display_vars = array(
			'title'	=> 'ACP_FORCE_LOGIN',
			'lang'	=> 'mods/force_login',
			'vars'	=> array(
			
				// Future functionality to globally enable / disable "Force Login"
				'allow_force_login'				=> array('lang' => 'ALLOW_FORCE_LOGIN',					'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),		

				'allow_force_login_bots'		=> array('lang' => 'ALLOW_FORCE_LOGIN_BOTS',			'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
				
				'allow_force_login_index'		=> array('lang' => 'ALLOW_FORCE_LOGIN_INDEX',			'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'allow_force_login_viewtopic'	=> array('lang' => 'ALLOW_FORCE_LOGIN_VIEWTOPIC',		'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'allow_force_login_viewforum'	=> array('lang' => 'ALLOW_FORCE_LOGIN_VIEWFORUM',		'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'allow_force_login_search'		=> array('lang' => 'ALLOW_FORCE_LOGIN_SEARCH',			'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'allow_force_login_faq'			=> array('lang' => 'ALLOW_FORCE_LOGIN_FAQ',				'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'allow_force_login_custom'			=> array('lang' => 'ALLOW_FORCE_LOGIN_CUSTOM',		'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false)

			),
		);

		if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}
		
		$this->new_config = $config;
		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
		$error = array();

		
		// We validate the complete config if whished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

		if ($submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}
		// Do not write values if there is an error
		if (sizeof($error))
		{
			$submit = false;
		}

		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			if ($config_name == 'auth_method')
			{
				continue;
			}

			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];
			
			if ($submit)
			{
				set_config($config_name, $config_value);
			}
		}
		
		if ($submit)
		{
			add_log('admin', 'LOG_CONFIG_' . strtoupper($mode));

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$this->tpl_name = 'acp_force_login';
		$this->page_title = $display_vars['title'];
		
		$template->assign_vars(array(
			'L_TITLE'			=> $user->lang[$display_vars['title']],
			'L_TITLE_EXPLAIN'	=> $user->lang[$display_vars['title'] . '_EXPLAIN'],

			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),

			'U_ACTION'			=> $this->u_action)
		);

		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$content = build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars);
			
			if (empty($content))
			{
				continue;
			}
			
			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars),
				)
			);
		
			unset($display_vars['vars'][$config_key]);
		}

	}


	/**
	* Force Login
	
	
	function allow_force_login($value, $key = '')
	{
		global $user;
		
		// Future functionality to globally enable / disable "Force Login"
		$options_ary = array(0 => 'ALLOW_FORCE_LOGIN_DISABLED', 1 => 'ALLOW_FORCE_LOGIN_ENABLED');

		$allow_force_login_options = '';
		foreach ($options_ary as $key_value=>$option)
		{
			$selected = ($value == $key_value) ? ' selected="selected"' : '';
			$allow_force_login_options .= '<option value="' . $key_value . '"' . $selected . '>' . $user->lang[$option] . '</option>';
		}


		return $allow_force_login_options;
	}
	*/
	
}

?>