<?php
use kartik\datecontrol\Module;
return [
	// format settings for displaying each date attribute
	'dateControlDisplay' => [
		Module::FORMAT_DATE => 'M-d-Y',
		Module::FORMAT_TIME => 'H:i:s A',
		Module::FORMAT_DATETIME => 'M-d-Y H:i:s A',
	],
	
	// format settings for saving each date attribute
	'dateControlSave' => [
		Module::FORMAT_DATE => 'U',
		Module::FORMAT_TIME => 'U',
		Module::FORMAT_DATETIME => 'U',
	],
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
];
