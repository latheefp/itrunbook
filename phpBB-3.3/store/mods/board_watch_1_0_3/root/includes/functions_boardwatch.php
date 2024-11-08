<?php
/**
*
* includes/functions_boardwatch.php
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


/**
* draw the boardwatch preference options in the acp prefs panel
*/
function boardwatch_draw_acp_prefs(&$data, $user_row)
{
	global $phpbb_root_path, $phpEx, $template, $user;
	include($phpbb_root_path . 'includes/constants_boardwatch.' . $phpEx);
	$user->add_lang('mods/info_ucp_boardwatch');
	$data = array_merge($data, array(
		'boardwatchb'	=> request_var('boardwatch', $user_row['user_boardwatchb']),
		'boardwatchf'	=> request_var('forumwatch', $user_row['user_boardwatchf']),
		'boardwatcht'	=> request_var('topicwatch', $user_row['user_boardwatcht']),
		)
	);

	$template->assign_vars(array(
		'S_BOARDWATCH_YES'			=> ($data['boardwatchb'] == BOARDWATCH_YES) ? true : false,
		'S_BOARDWATCH_YES_BUT'		=> ($data['boardwatchb'] == BOARDWATCH_YES_BUT) ? true : false,
		'S_BOARDWATCH_NO'			=> ($data['boardwatchb'] == BOARDWATCH_NO) ? true : false,
		'S_FORUMWATCH_YES'			=> ($data['boardwatchf'] == BOARDWATCH_YES) ? true : false,
		'S_FORUMWATCH_YES_BUT'		=> ($data['boardwatchf'] == BOARDWATCH_YES_BUT) ? true : false,
		'S_TOPICWATCH_YES'			=> ($data['boardwatcht'] == BOARDWATCH_YES) ? true : false,
		'S_TOPICWATCH_YES_BUT'		=> ($data['boardwatcht'] == BOARDWATCH_YES_BUT) ? true : false,
	));
}


/**
* add boardwatch preferences to the update query
*/
function boardwatch_submit_acp_prefs(&$sql_ary, $data)
{
	global $phpbb_root_path, $phpEx, $template;
	$sql_ary = array_merge($sql_ary, array(
		'user_boardwatchb'	=> $data['boardwatchb'],
		'user_boardwatchf'	=> $data['boardwatchf'],
		'user_boardwatcht'	=> $data['boardwatcht'],
		)
	);
}


/**
* include users subscribed to boardwatch in the list of users who will get notice of the post or reply
*/
function include_boardwatch_users(&$notify_rows, &$sql_ignore_users, $mode)
{
	global $db;

	if ($mode != 'post' && $mode != 'reply' && $mode != 'quote')
	{
		// boardwatch only should be sent for new posts or replies (including posts), so return if not one of those
		return;
	}

	$template = ($mode == 'post') ? 'boardwatch_post' : 'boardwatch_reply';

	$sql = 'SELECT user_id, username, user_email, user_lang, user_notify_type, user_jabber, user_boardwatchb, user_notify_status
		FROM ' . USERS_TABLE . '
		WHERE user_boardwatchb <> ' . BOARDWATCH_NO . '
			AND user_notify_status = 0
			AND user_id NOT IN (' . $sql_ignore_users . ')
			AND user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')';
	$result = $db->sql_query($sql);

	$boardwatch_yes_but_list = '';
	while ($row = $db->sql_fetchrow($result))
	{
		$notify_rows[$row['user_id']] = array(
			'user_id'				=> $row['user_id'],
			'username'				=> $row['username'],
			'user_email'			=> $row['user_email'],
			'user_jabber'			=> $row['user_jabber'],
			'user_lang'				=> $row['user_lang'],
			'user_notify_status'	=> $row['user_notify_status'],
			'notify_type'			=> 'boardwatch',
			'yes_but'				=> ($row['user_boardwatchb'] == BOARDWATCH_YES_BUT) ? true : false,
			'template'				=> ($mode == 'post') ? 'boardwatch_post' : 'boardwatch_reply',
			'method'				=> $row['user_notify_type'],
			'allowed'				=> false
		);

		if ($row['user_boardwatchb'] == BOARDWATCH_YES_BUT)
		{
			$boardwatch_yes_but_list .= ', ' . $row['user_id'];
		}
	}
	$db->sql_freeresult($result);

	// make sure the subsequent topic and forum notices don't go out to people already receiving boardwatch notices
	if (sizeof($notify_rows))
	{
		$sql_ignore_users .= ', ' . implode(', ', array_keys($notify_rows));
	}

	return trim($boardwatch_yes_but_list, ', ');
}


/**
* update the boardwatch_status entry in the users table
*/
function update_boardwatch_status($boardwatch_yes_but_list)
{
	global $db;

	// if there is anyone in the yes but list, set notify status flag to 1 for them so they won't be notified again till they revisit site
	if ($boardwatch_yes_but_list)
	{
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_notify_status = 1
			WHERE user_id IN (' . $boardwatch_yes_but_list . ')';
		$db->sql_query($sql);
	}
}


?>