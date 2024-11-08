<?php
/**
*
* @package phpBB3
* @version $Id: createpdf.php 2011-06-06 11:40 $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
include($phpbb_root_path . 'pdf24api.'.$phpEx);

// Start session management
$user->session_begin();
$user->setup('mods/pdf24');
$auth->acl($user->data);

//get parameters
$topic_id = intval(request_var('t', 0));

//get topic data
$sql = "SELECT forum_id, topic_title
		FROM ". TOPICS_TABLE ."
		WHERE topic_id = $topic_id";
$result = $db->sql_query($sql);
$topic_data = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

if(!$topic_data)
{
	trigger_error($user->lang['TOPIC_INVALID'], E_USER_ERROR);
	exit;
}

// Extract forum id
$forum_id = intval($topic_data['forum_id']);

// Check permissions
if (!$auth->acl_get('f_read', $forum_id))
{
     trigger_error('NOT_AUTHORISED');
	 exit;
}

//get forum data
$sql = "SELECT *
		FROM ". FORUMS_TABLE ."
		WHERE forum_id = $forum_id";
$result = $db->sql_query($sql);
$forum_data = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

// Check for passworded forum ... 
if ($forum_data['forum_password'])
{
	login_forum_box($forum_data);
}

// Fetch posts
$sql = "SELECT t1.bbcode_uid, t1.bbcode_bitfield, t1.post_text, t1.post_subject, t1.topic_id, t1.forum_id, t1.post_id, t1.post_time, t2.username
		FROM ". POSTS_TABLE ." as t1, ". USERS_TABLE ." as t2
		WHERE topic_id = $topic_id AND t1.poster_id = t2.user_id
		ORDER BY t1.post_time ASC";
$result = $db->sql_query($sql);

$bbcode_bitfield = '';
$total_posts = 0;
$postrow = array();

while ($row = $db->sql_fetchrow($result))
{
	$postrow[] = $row;
	$bbcode_bitfield = $bbcode_bitfield | base64_decode($row['bbcode_bitfield']);
}
$db->sql_freeresult($result);
$total_posts = count($postrow);

// Instantiate BBCode if need be
if ($bbcode_bitfield !== '')
{
	$bbcode = new bbcode(base64_encode($bbcode_bitfield));
}
$forum_url = generate_board_url();
if(substr($forum_url, -1) == '/') {
	$forum_url = substr($forum_url, 0, -1);
}

//Build pdf filename
$search = array('/','\\',':','?','*','"','|','<','>');
$pdf_filename = $config['sitename'] . ' - ' . $topic_data['topic_title'];
$pdf_filename = str_replace($search, '_', $pdf_filename);

//build the document with pdf24 api
$doc = new PDF24Doc();
$doc->setHeadline($config["sitename"]);
$doc->setHeadlineUrl($forum_url);
$doc->setBaseUrl($forum_url);
$doc->setCharset("utf-8");
$doc->setPdfFileName($pdf_filename);

foreach($postrow as $row)
{
	$text = $row["post_text"];
	$title = $row["post_subject"];
	$title_url = $forum_url . "/viewtopic.$phpEx?t=".$row["topic_id"]."&f=".$row["forum_id"]."#".$row["post_id"];
	$author = $row["username"];
	$time_stamp = $user->format_date($row["post_time"]);
	
	// Second parse bbcode here
	if ($row['bbcode_bitfield'])
	{
		$bbcode->bbcode_second_pass($text, $row['bbcode_uid'], $row['bbcode_bitfield']);
	}
	$text = bbcode_nl2br($text);
	$text = smiley_text($text);
	
	$doc->addPart($text, $title, $title_url, $author, $time_stamp);
}

//do the request
$response = $doc->doRequest();
$statusLocation = $response->getStatusLocation();
if($statusLocation)
{
	redirect($statusLocation, false, true);
}
else
{
	//should never occur
}

?>