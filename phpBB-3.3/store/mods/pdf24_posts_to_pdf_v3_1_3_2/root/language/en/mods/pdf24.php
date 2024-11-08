<?php
/**
*
* pdf24 [English]
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

// All language files should use UTF-8 as their encoding and the files must not contain a BOM.

$lang = array_merge($lang, array(
	'DOWNLOAD_AS_PDF' 	=> 'Download as PDF',
	'TOPIC_INVALID'		=> 'This topic is not valid!'
));

?>
