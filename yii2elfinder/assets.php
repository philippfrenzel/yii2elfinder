<?php

return array(
	'yii2elfinder/core' => array(
		'sourcePath' => __DIR__ . '/assets',
		'js' => array(
			'js/elfinder.full.js',
			'js/i18n/elfinder.de.js'
		),
		'css' => array(
			'css/elfinder.full.css',
			'css/smoothness/jquery-ui-1.10.3.custom.css'
		),
		'depends'=>array(
			'yii/jquery',
			'yii/jui/core',
			'yii/jui/theme/base/core',
			'yii/jui/resizable',
			'yii/jui/droppable',
			'yii/jui/selectable'
		)
	)
);
