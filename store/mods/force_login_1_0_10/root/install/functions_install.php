<?php
/**
*
* @package phpBB3
* @version $Id$
* @version $Id: functions_install.php v 1.0.10 2009/01/24 18:00:00 xceler8shun Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Borrowed from evil3 troll mod
*/

/**
* @ignore
*/

/**
 * Adds user-defined module to ACP (or MCP, etc). Useful for install scripts
 * John Wells, based on original phpBB code in acp_modules.
 *
 * @param array $module_data -- array containing module_basename, module_mode, module_auth, module_enabled, module_display, parent_id, module_langname and module_class
 * @param array $error Store all errors in there
 * @return mixed module id
 */
 
 if (!defined('IN_PHPBB'))
{
	exit;
}

function add_module(&$module_data, &$error)
{
	global $phpbb_root_path, $phpEx;

	// better than include_once
	if (!class_exists('acp_modules'))
	{
		include($phpbb_root_path . 'includes/acp/acp_modules.' . $phpEx);
	}

	$_module = &new acp_modules();
	$_module->module_class = $module_data['module_class'];

	$module_id = module_exists($module_data['module_langname'], $module_data['parent_id']);

	if ($module_id)
	{
		$module_data['module_id'] = $module_id;
	}

	// Adjust auth row if not category
	if ($module_data['module_basename'] && $module_data['module_mode'])
	{
		$fileinfo = $_module->get_module_infos($module_data['module_basename']);
		$module_data['module_auth'] = $fileinfo[$module_data['module_basename']]['modes'][$module_data['module_mode']]['auth'];
	}

	$error = $_module->update_module_data($module_data, true);

	$_module->remove_cache_file();

	if (sizeof($error))
	{
		return false;
	}

	return $module_data['module_id'];
}

/**
 * Determines if a module already exists, and returns the module ID if it does.
 * More than one module with the same name and parent could exist, but this function just returns the first one it finds.
 * The alternatives are to delete duplicates, or throw up an error, neither of which is really better behaviour.
 * John Wells
 *
 * @param string $module_name -- module name (or language key)
 * @param integer $parent -- the id of the parent entity
 * @return mixed module_exists
 */
function module_exists($module_name, $parent = 0)
{
	global $db;

	$sql = 'SELECT module_id FROM ' . MODULES_TABLE . '
		WHERE parent_id = ' . intval($parent) . '
			AND module_langname = \'' . $db->sql_escape($module_name) . '\'';
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	// there could be a duplicate module, but screw it
	if (!$row || empty($row['module_id']))
	{
		return false;
	}

	return $row['module_id'];
}

/**
 * Install a single module into existing categories
 * and create categories if they don't exist
 *
 * @param string $module_class The module class, like acp/mcp/ucp
 * @param string $module_name The modules filename minus extension and class_
 * @param array $error Passed by reference array for errors
 * @param mixed $main_category Only used for ACP if there's a category above the one stored in the file
 * @return mixed module_ids Array of module ids added
 */
function install_module($module_class, $module_name, &$error, $main_category = false)
{
	global $phpbb_root_path, $phpEx;

	$class_name = $module_name . '_info';
	$module_filename = "{$phpbb_root_path}includes/$module_class/info/$module_name.$phpEx";

	if (!class_exists($class_name))
	{
		include($module_filename);
	}

	$module_info = call_user_func(array($class_name, 'module'));

	$module_ids = array();

	if ($main_category)
	{
		if (!$module_main_cat = module_exists($main_category))
		{
			$module_data = array(
				'module_basename'	=> '',
				'module_mode'		=> '',
				'module_auth'		=> '',
				'module_enabled'	=> 1,
				'module_display'	=> 1,
				'parent_id'			=> 0,
				'module_langname'	=> $main_category,
				'module_class'		=> $module_class,
			);

			$module_main_cat = add_module($module_data, $error);
		}
	}

	foreach ($module_info['modes'] as $mode => $mode_data)
	{
		foreach ($mode_data['cat'] as $category)
		{
			if (!$module_cat = module_exists($category))
			{
				$module_data = array(
					'module_basename'	=> '',
					'module_mode'		=> '',
					'module_auth'		=> '',
					'module_enabled'	=> 1,
					'module_display'	=> 1,
					'parent_id'			=> ($main_category) ? $module_main_cat : 0,
					'module_langname'	=> $category,
					'module_class'		=> $module_class,
				);

				$module_cat = add_module($module_data, $error);
			}

			$module_data = array(
				'module_basename'	=> str_replace("{$module_class}_", '', $module_info['filename']),
				'module_mode'		=> $mode,
				'module_auth'		=> $mode_data['auth'],
				'module_enabled'	=> 1,
				'module_display'	=> 1,
				'parent_id'			=> $module_cat,
				'module_langname'	=> $mode_data['title'],
				'module_class'		=> $module_class,
			);

			$module_ids[] = add_module($module_data, $error);
		}
	}

	return $module_ids;
}


/**
 * Recursive function to delete a folder
 *
 * @param string $dir
 */
function delete_dir($dir)
{
   if (function_exists('scandir'))
   {
      foreach (scandir($dir) as $file)
      {
         if (in_array($file, array('.', '..'), true))
         {
            continue;
         }

         if (is_dir($dir . $file . '/'))
         {
            delete_dir($dir . $file . '/');
         }
         else
         {
            unlink($dir . $file);
         }
      }
   }
   else
   {
      $dh  = opendir($dir);

      while (false !== ($file = readdir($dh)))
      {
         if (in_array($file, array('.', '..'), true))
         {
            continue;
         }

         if (is_dir($dir . $file . '/'))
         {
            delete_dir($dir . $file . '/');
         }
         else
         {
            unlink($dir . $file);
         }
      }
   }

   rmdir($dir);
}


/**
 * Process installation from an install array
 */
function process_install($data, &$error, &$db_tools)
{
	foreach ($data as $func => $args)
	{
		switch ($func)
		{
			//case 'add_permissions':
			//	call_user_func_array('add_permissions', $args);
			//break;
			case 'install_modules':
				foreach ($args as $module)
				{
					install_module($module[0], $module[1], $error, isset($module[2]) ? $module[2] : false);
				}
			break;
			case 'set_config':
				foreach ($args as $cfg_item)
				{
					call_user_func_array('set_config', $cfg_item);
				}
			break;
		}
	}
}

?>
