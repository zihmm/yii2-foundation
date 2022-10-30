<?php

namespace app\entities\notifications;

use app\enums\NotificationEnum;
use app\exceptions\Exception;

class HttpNotification extends Notification
{
	public function __construct(
		protected string $message,
		protected string $type = NotificationEnum::Success,
		protected int $httpCode = 200,
		protected bool $displayInline = false,
		$config = []
	) {
		parent::__construct($this->message, $this->type, $config);
	}

	public function setHttpCode($code): void
	{
		$this->httpCode = $code;
	}

	public function getHttpCode(): int
	{
		return $this->httpCode;
	}

	public function setDisplayInline($value): void
	{
		$this->displayInline = $value;
	}

	public function getDisplayInline(): bool
	{
		return $this->displayInline;
	}

	public function asArray(): array
	{
		return array_merge_recursive(parent::asArray(), [
			'httpCode' => $this->getHttpCode()
		]);
	}

	public static function createByException(Exception $exception): Notification
	{
		return self($exception->getMessage(), NotificationEnum::Error, 500);
	}
}