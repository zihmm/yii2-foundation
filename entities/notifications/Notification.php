<?php

namespace app\entities\notifications;

use app\enums\NotificationEnum;
use app\exceptions\Exception;
use yii\base\Component;

class Notification extends Component
{
	public function __construct(
		private string $message,
		private string $type,
		$config = []
	) {
		parent::__construct( $config );
	}

	public function getType($asString = false): string|int
	{
		return $asString ? NotificationEnum::getLabel($this->type) : $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function setMessage($message): void
	{
		$this->message = $message;
	}

	public function getMessage(): string
	{
		return $this->message;
	}

	public static function createByException(Exception $exception): self
	{
		return new self($exception->getMessage(), NotificationEnum::Error);
	}

	public function asArray(): array
	{
		return [
			'type' => $this->getType(true),
			'message' => $this->getMessage()
		];
	}
}