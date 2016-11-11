<?php

/**
* @version $Id: core.php,v 1.5 2006/02/28 22:12:25 harryf Exp $
* @package utf8
* @subpackage strings
*/

// Define UTF8_CORE as required
if (!defined('UTF8_CORE'))
	define('UTF8_CORE', true);

function utf8_strlen($str)
{
	return mb_strlen($str);
}
function utf8_strpos($str, $search, $offset = false)
{
	// Strip unvalid characters
	$str = utf8_bad_strip($str);

	if ($offset === false)
		return mb_strpos($str, $search);
	else
		return mb_strpos($str, $search, $offset);
}

function utf8_strrpos($str, $search, $offset = false)
{
	// Strip unvalid characters
	$str = utf8_bad_strip($str);

	if (!$offset)
	{
		// Emulate behaviour of strrpos rather than raising warning
		if (empty($str))
			return false;

		return mb_strrpos($str, $search);
	}
	else
	{
		if (!is_int($offset))
		{
			trigger_error('utf8_strrpos expects parameter 3 to be long', E_USER_WARNING);
			return false;
		}

		$str = mb_substr($str, $offset);

		if (($pos = mb_strrpos($str, $search)) !== false)
			return $pos + $offset;

		return false;
	}
}

function utf8_substr($str, $offset, $length = false)
{
	if ($length === false)
		return mb_substr($str, $offset);
	else
		return mb_substr($str, $offset, $length);
}

function utf8_strtolower($str)
{
	return mb_strtolower($str);
}

function utf8_strtoupper($str)
{
	return mb_strtoupper($str);
}
