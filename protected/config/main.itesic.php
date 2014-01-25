<?php

return array(

	// application components
	'components'=>array(
		
		'db'=>array(
            
			'class'=>'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=termag_glavna',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'icefire007',
			'charset' => 'utf8',
			
		),
	),
);

      