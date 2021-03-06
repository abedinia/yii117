<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

//    import from main.php
    'import'=>array(
        'application.models.*',
        'application.models.entities.*',
        'application.components.*',
        'application.extensions.*'
    ),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

        'apputil' => array(
            'class' => 'extensions.apputil.AppUtility',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	),
);
