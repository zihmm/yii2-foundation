<?php

$config = [
	'class' => \yii\symfonymailer\Mailer::class,
	'viewPath' => '@app/mail',
	'useFileTransport' => false,
	'transport' => 'sendmail://default'

];

if (YII_ENV_DEV)
{
	$config['transport'] = [
		'scheme' => 'smtp',
		'host' => '',
		'username' => '',
		'password' => '',
		'port' => 587,
		'encryption' => 'tls'
	];
}

return $config;