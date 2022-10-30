<?php

namespace app\enums;

use yii2mod\enum\helpers\BaseEnum;

class MessageCategoryEnum extends BaseEnum
{
	const Exceptions = 'app/exceptions';
	const Notifications = 'app/notifications';
	const Site = 'app/site';
}