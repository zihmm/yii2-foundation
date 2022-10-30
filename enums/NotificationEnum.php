<?php

namespace app\enums;

use yii2mod\enum\helpers\BaseEnum;

class NotificationEnum extends BaseEnum
{
	const Success = 1;
	const Warning = 2;
	const Error = 3;

	protected static $list = [
		self::Success => 'success',
		self::Warning => 'warning',
		self::Error => 'error'
	];
}