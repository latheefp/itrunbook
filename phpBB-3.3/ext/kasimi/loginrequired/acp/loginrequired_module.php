<?php

/**
 *
 * @package phpBB Extension - Login Required
 * @copyright (c) 2015 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\loginrequired\acp;

class loginrequired_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('kasimi/loginrequired', 'acp_configuration');
		$this->tpl_name = 'acp_loginrequired';
		$this->page_title = $user->lang('LOGINREQUIRED_TITLE');

		add_form_key('acp_loginrequired');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_loginrequired'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action));
			}

			$config->set('kasimi.loginrequired.enabled', $request->variable('loginrequired_enabled', 0));
			$config->set('kasimi.loginrequired.regex', $request->variable('loginrequired_regex', 0));
			$config->set('kasimi.loginrequired.exceptions', $request->variable('loginrequired_exceptions', '', true));

			global $phpbb_log;
			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'LOGINREQUIRED_CONFIG_UPDATED');
			trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'LOGINREQUIRED_ENABLED'		=> $config['kasimi.loginrequired.enabled'],
			'LOGINREQUIRED_REGEX'		=> $config['kasimi.loginrequired.regex'],
			'LOGINREQUIRED_EXCEPTIONS'	=> $config['kasimi.loginrequired.exceptions'],
			'U_ACTION'					=> $this->u_action,
		));
	}
}
