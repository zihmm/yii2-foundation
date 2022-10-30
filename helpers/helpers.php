<?php

use app\enums\MessageCategoryEnum;

if ( ! function_exists('random_chars'))
{
	/**
	 * Generate a random, not secure string with given length
	 *
	 * @param $length
	 * @return string
	 */
	function random_chars(int $length = 32): string
	{
		$random = '';

		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charsLength = strlen($chars);

		for ($count = 0; $count < $length; $count++)
		{
			$random .= $chars[rand(0, $charsLength - 1)];
		}

		return $random;
	}
}

if ( ! function_exists('plog'))
{
	/**
	 * Convenience function to log to project log file
	 *
	 * @param $message
	 * @return void
	 */
	function plog($message, $dieAfter = false): void
	{
		Yii::debug($message, 'project');

		if ($dieAfter)
		{
			die();
		}
	}
}

if ( ! function_exists('__t'))
{
	/**
	 * Convenience function to localize labels
	 *
	 * @param string $key
	 * @param string $category
	 * @return string
	 */
	function __t(string $key, string $category = MessageCategoryEnum::Notifications)
	{
		return Yii::t($category, $key);
	}
}