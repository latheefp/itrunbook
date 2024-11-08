<?php

/**
 *
 * @package phpBB Extension - Login Required
 * @copyright (c) 2015 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\loginrequired\event;

use phpbb\config\config;
use phpbb\user;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/* @var user */
	protected $user;

	/* @var config */
	protected $config;

	/* @var string */
	protected $php_ext;

	/* @var boolean */
	protected $is_first_user_setup = true;

	/**
 	 * Constructor
	 *
	 * @param user		$user
	 * @param config	$config
	 * @param string	$php_ext
	 */
	public function __construct(
		user $user,
		config $config,
		$php_ext
	)
	{
		$this->user		= $user;
		$this->config	= $config;
		$this->php_ext	= $php_ext;
	}

	/**
	 * Register hooks
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => array('login_required', 1000),
		);
	}

	/**
	 * Event: core.user_setup
	 */
	public function login_required()
	{
		if ($this->user->data['user_id'] == ANONYMOUS && $this->is_first_user_setup && $this->config['kasimi.loginrequired.enabled'])
		{
			$page = $this->user->page['page'];

			// Remove query string
			$query_string_len = utf8_strlen($this->user->page['query_string']);
			if ($query_string_len)
			{
				$page = utf8_substr($page, 0, -($query_string_len + 1));
			}

			// If the user is not browsing any of the whitelisted pages, we redirect to login page
			if (!$this->is_exception($page))
			{
				// login_box() calls $user->setup() and therefore this method again,
				// let's make sure we don't handle the next call.
				$this->is_first_user_setup = false;

				// We need to force login_box() to re-initialize the $user object
				// because an extension might have added its language keys already.
				if (phpbb_version_compare(PHPBB_VERSION, '3.2.0', '<'))
				{
					$this->user->lang = array();
				}

				login_box();
			}
		}
	}

	/**
	 * Returns true if $page is whilelisted, false otherwise
	 *
	 * @param string $page
	 * @return bool
	 */
	protected function is_exception($page)
	{
		if ($page === 'ucp.' . $this->php_ext)
		{
			return true;
		}

		$exceptions = explode("\n", $this->config['kasimi.loginrequired.exceptions']);

		foreach ($exceptions as $exception)
		{
			$exception = trim($exception);

			if (!utf8_strlen($exception))
			{
				continue;
			}

			if ($this->config['kasimi.loginrequired.regex'])
			{
				if (preg_match('#' . $exception . '#ui', $page))
				{
					return true;
				}
			}
			else
			{
				if ($page === $exception)
				{
					return true;
				}
			}
		}

		return false;
	}
}
