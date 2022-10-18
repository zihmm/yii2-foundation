<?php

$config = [
	'class' => 'yii\db\Connection',
	'charset' => 'utf8',

	'dsn' => 'mysql:host=localhost;dbname=',
	'username' => '',
	'password' => ''
];

if (YII_ENV_DEV)
{
	$config['dsn'] = 'mysql:host=localhost;dbname=';
	$config['username'] = '';
	$config['password'] = '';
}

return $config;