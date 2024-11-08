<?php

/**
*
* @package Email To User Mod
* @version $Id: email_to_user.php
* @copyright (c) Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

function email_to_user($mode, $user_id_array = false, $group_id = false, $pending = 0)
{
	global $config, $db, $template, $user, $phpbb_root_path, $phpEx;

	// no array set or user is pending just go back to what we were doing
	if (!sizeof($user_id_array) || $pending)
	{
		return;		
	}
	
	// grab user data that is getting the email
	$sql = 'SELECT user_id, username, user_email, user_lang, user_jabber, user_notify_type
		FROM ' . USERS_TABLE . '
		WHERE ' . $db->sql_in_set('user_id', $user_id_array);
	$result = $db->sql_query($sql);
	$email_users = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);

	// we didn't get a soul
	if (!sizeof($email_users))
	{
		return;
	}
	else
	{
		// grab the group name
		$group_name = get_group_name((int) $group_id);			
		// adjust some variables based on mode
		switch ($mode)
		{
			case 'add':
				$email_template	= 'group_added';
				$log = 'LOG_EMAIL_SENT_USER_ADDED_GROUP';
			break;

			case 'delete':
				$email_template = 'user_delete_group';
				$log = 'LOG_EMAIL_SENT_USER_DELETED_GROUP';
			break;
	
			case 'promote';
				$email_template = 'user_promote_group';
				$log = 'LOG_EMAIL_SENT_USER_PROMOTED_GROUP';
			break;
				
			case 'demote';
				$email_template = 'user_demote_group';
				$log = 'LOG_EMAIL_SENT_USER_DEMOTED_GROUP';
			break;
	
			default:
				return false;
		}
			
		if (!function_exists('send'))
		{
			include($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
		}
		$server_url = generate_board_url();

		$messenger = new messenger(true);
	
		// Email headers
		$messenger->headers('X-AntiAbuse: Board servername - ' . $config['server_name']);
		$messenger->headers('X-AntiAbuse: User_id - ' . $user->data['user_id']);
		$messenger->headers('X-AntiAbuse: Username - ' . $user->data['username']);
		$messenger->headers('X-AntiAbuse: User IP - ' . $user->ip);
		
		// Loop through our list of users
		for ($i = 0, $size = sizeof($email_users); $i < $size; $i++)
		{				
			$messenger->template($email_template, $email_users[$i]['user_lang']);
			$messenger->to($email_users[$i]['user_email'], $email_users[$i]['username']);
			$messenger->im($email_users[$i]['user_jabber'], $email_users[$i]['username']);
			$messenger->from($config['board_contact']);
			$messenger->replyto($config['board_contact']);
						
			$messenger->assign_vars(array(
				'SITENAME'		=> $config['sitename'],
				'USERNAME'		=> $email_users[$i]['username'],
				'GROUP_NAME'	=> $group_name,
				'EMAIL_SIG'		=> $config['board_email_sig'],
				'U_GROUP'		=> "$server_url/memberlist.$phpEx?mode=group&g={$group_id}")
			);
			
			$messenger->send($email_users[$i]['user_notify_type']);
			add_log('admin', $log, $group_name, $email_users[$i]['username']);
		}
		$messenger->save_queue();
	}
	return;	
}


?>
