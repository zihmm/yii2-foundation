<?php

use yii\helpers\Html;
use yii\i18n\PhpMessageSource;
use yii\twig\ViewRenderer;
use yii\web\View;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$mail = require __DIR__ . '/mail.php';
$aliases = require __DIR__ . '/aliases.php';

$config = [
    'id' => 'Yii2 Foundation',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'de-CH',
    'timeZone' => 'Europe/Zurich',
    'layout' => 'main.twig',

    'aliases' => $aliases,
    'components' => [
		'view' => [
			'class' => View::class,
			'renderers' => [
				'twig' => [
					'class' => ViewRenderer::class,
					'cachePath' => '@runtime/twig/cache',
					'options' => [
						'auto_reload' => true,
					],
					'globals' => [
						'Html' => ['class' => Html::class],
						'Yii' => ['class' => Yii::class]
					],
					'uses' => ['yii\bootstrap'],

				]
			]
		],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'KXi6fl9XIqNRpS6p_D2QZ-lYjL3v4dHF',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => $mail,
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logVars' => []
                ],
	            [
		            'class' => 'yii\log\FileTarget',
		            'levels' => ['trace'],
		            'logVars' => [],

		            'categories' => ['project'],
		            'logFile' => '@runtime/logs/project.log'
	            ]
            ],
        ],
        'db' => $db,
        'i18n' => [
	        'translations' => [
		        'app*' => [
			        'class' => PhpMessageSource::class
		        ]
	        ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],

    ],
    'params' => $params,
];

include __DIR__ . '/DI.php';

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    // $config['bootstrap'][] = 'debug';
    // $config['modules']['debug'] = [
        // 'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    // ];

    // $config['bootstrap'][] = 'gii';
    // $config['modules']['gii'] = [
        // 'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    //];
}

return $config;
