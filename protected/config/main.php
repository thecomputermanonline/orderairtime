<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Order Airtime Online',
'theme'=>'bootstrap',
'defaultController' => 'bookings/bookings/create',   // <--- add this line and replace with correct controller/action
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.AweCrud.components.*',
		'application.modules.bookings.models.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'bookings',
		'gii'=>array(
		 
        
			'class'=>'system.gii.GiiModule',
			'password'=>'12345',
			'generatorPaths' => array(
            'ext.AweCrud.generators', // AweCrud generators
        ),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
	'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap'),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		 'messages' => array (
        'extensionPaths' => array(
            'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
        ),
    ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			//'showScriptname'=>'',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=hrdotnet_db_orderairtime',
			'emulatePrepare' => true,
			'username' => 'hrdotnet_order',
			'password' => 'myjoy=123',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);