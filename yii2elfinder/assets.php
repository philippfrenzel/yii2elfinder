<?php

return array(
	'yii2elfinder/core' => array(
		'sourcePath' => __DIR__ . '/assets',
		'js' => array(
			'js/elfinder.min.js',
			'js/i18n/elfinder.de.js'
		),
		'css' => array(
			'css/elfinder.min.css',
			'css/theme.css'
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
