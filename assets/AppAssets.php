<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAssets extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';

	public $css = [
		'css/app.css'
	];

	public $js = [
		'scripts/bootstrap.js'
	];

	public function init()
	{
		//
	}
}