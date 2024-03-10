<?php 
/**
*
* @author Saeed Hubaishan saeed@hubaishan.com
* 
*
* @package Hijri Calendar
* @version 1.0.0
* @copyright (c) 2011 Hubaishan
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* 
* hdate($format, $timestamp)
*
* Returns a hijri & Gregorian date string formatted according to the given format string, 
* using the given integer timestamp or the current time if no timestamp is given. 
* In other words, timestamp is optional and defaults to the value of time().
* It does same of gmdate(),date() but if can view Hijri date.
*
* $format
* The format of the outputted date string, To view Hijri Calendar Use these format letters 
* Notice that these are same letters which used with date() php function unless they have underscore (_) prefix
*	_j Day of the month without leading zeros
*	_d Day of the month, 2 digits with leading zeros
*	_z The day of the year (starting from 0)
*	_M A short textual representation of a month, such as Ram
*	_F A full textual representation of a month, such as Ramadan
*	_m  Numeric representation of a month, with leading zeros
*	_n Numeric representation of a month, without leading zeros
*	_t Number of days in the given month
*	_L Whether it's a leap year, 1 if it is a leap year, 0 otherwise
*	_Y A full numeric representation of a year, 4 digits
*	_y A two digit representation of a year
*/


function hdate($format = '_j _M _Y', $timestamp = 0)
	{
		if (strpos($format, "_") > 0) 
		{
			$hmonths = array("\M\u\h\a\\r\\r\a\m", "\S\a\f\a\\r", "\R\a\b\i \A\l \A\w\w\a\l", "\R\a\b\i \A\l \T\h\a\\n\i", "\J\u\m\a\d\a \A\l \O\u\l\a", "\J\u\m\a\d\a \A\l \A\k\h\i\\r\a", "\R\a\j\a\b", "\S\h\a\b\a\\n", "\R\a\m\a\d\a\\n", "\S\h\a\w\w\a\l", "\D\h\u\l \Q\i\d\a\h", "\D\h\u\l \H\i\j\j\a\h");
			$hsmonths = array("\M\u\h", "\S\a\f", "\R\b1", "\R\b2", "\J\m1", "\J\m2", "\R\a\j", "\S\h\a", "\R\a\m", "\S\h\w", "\Q\i\d", "\H\i\j");
			if ($timestamp == 0 ) 
			{
				$timestamp = time();
			}
			list($w, $mn, $am) = explode(' ', gmdate("w n a", $timestamp));
			$j = intval($timestamp / 86400);
			$j = $j + 492150; 
			$n = intval($j / 10631);
			$j = $j - ($n * 10631);
			$y = intval($j / 354.36667);
			$hy = ($n * 30) + $y + 1;
			$j = $j - round($y * 354.36667);
			$z = $j;
			$m = intval($j / 29.5);
			$hm = $m + 1;
			$j = $j - round($m * 29.5);
			$d = $j;
			$hd = intval($d);

			if ($hd == 0) 
			{
				$hd = ($hm % 2 == 1)? (29): (30);
				$hm = $hm - 1;
			}

			if ($hm == 0 ) 
			{
				$hm = 12;
				$hy = $hy - 1;
				if (round(($hy % 30) * 0.36667) > round((($hy - 1) % 30) * 0.36667)) 
				{
					$hd = 30;
					$z = 355;
				} 
				else 
				{
					$hd = 29;
					$z = 354;
				}
			}
			$L = (round(($hy % 30) * 0.36667) > round((($hy - 1) % 30) * 0.36667))? (1): (0);
			$str = '';
			for ($n = 0; $n <= strlen($format); $n++) 
			{
				$c = substr($format, $n, 1);
				switch ($c) 
				{
					case "_":
						$n = $n + 1;
						switch (substr($format, $n, 1)) 
						{
							case "j":
								$str .= $hd;
							break;

							case "d":
								$str .= str_pad($hd, 2, "0", STR_PAD_LEFT);
							break;

							case "z":
								$str .= $z - 1;
							break;

							case "M":
								$str .= $hsmonths[($hm - 1)];
							break;

							case "F":
								$str .= $hmonths[($hm - 1)];
							break;

							case "t":
								$t = ($hm % 2 == 1)? (30): (29);
								if ($hm == 12 && $L == 1) $t =30;
								$str .= $t;
							break;

							case "m":
								$str .= str_pad($hm, 2, "0", STR_PAD_LEFT);
							break;
							
							case "n":
								$str .= $hm;
							break;
							
							case "y":
								$str .= substr($hy, 2);
							break;
							
							case "Y":
								$str .= $hy;
							break;
							
							case "L":
								$str .= $L;
							break;
							
							default:
								$str .= substr($format, $n, 1);
							break;
						}	
					break;
					
					case '\\':
						$str .= substr($format, $n, 2);
						$n++;
					break;

					default:
						$str .= $c;
					break;
				}	
			}
		return gmdate($str, $timestamp);

		} 
		else 
		{
			return gmdate($format, $timestamp);
		}
	}
    ?>
