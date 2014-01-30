<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Hotel Termag Jahorina',
	'defaultController' => 'termag',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.editMe.helpers.ExtEditMeHelper',
		'application.extensions.yii-mail.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'test',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','46.239.2.250','94.250.48.80','::1'),
		),*/
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl' => array('termag/login'),
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(  
			'urlFormat'=>'path',
			'rules'=>array(
                'gii'=>'gii',
                'gii/<controller:\w+>'=>'gii/<controller>',
                 'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                //'<action:\w+>'=>'termag/<action>', //kontroler
                'termag/<id:\d+>/<title:.*?>'=>'post/view',
                 
                '<controller:\w+>/<action:\w+>/<album>'=>'<controller>/<action>', //galerija 
                '<controller:\w+>/<action:\w+>/<tip>'=>'<controller>/<action>', //virtuelna
                '<controller:\w+>/<action:\w+>/<vijest>'=>'<controller>/<action>', //vijesti
                '<controller:\w+>/<action:\w+>/<page>'=>'<controller>/<action>', //vijesti stranice
			),   
			
			'showScriptName'=>false,
			'caseSensitive'=>false,
			
		),
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
            
			'class'=>'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=termag_glavna',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'termag/error',
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
		'mail' => array(
        'class' => 'application.extensions.yii-mail.YiiMail',
        'transportType'=>'smtp', /// case sensitive!
        'transportOptions'=>array(
            'host'=>'smtp.gmail.com',
            'username'=>'goolub.igor@gmail.com',
            // or email@googleappsdomain.com
            'password'=>'merdevine',
            'port'=>'465',
            'encryption'=>'ssl',
            ),
        'viewPath' => 'application.views.mail',
        'logging' => true,
        'dryRun' => false ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'goolub.igor@gmail.com',
	),
	
	//editor
	
      

);

      