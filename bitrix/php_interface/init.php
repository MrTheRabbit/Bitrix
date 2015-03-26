<?

// Autoload классов
CModule::AddAutoloadClasses(
	'',
	array(
		'CIBlockPropertyCRM' 	=> '/bitrix/php_interface/include/iblock_props/prop_crm.php',
		'CIBlockPropertyColor' 	=> '/bitrix/php_interface/include/iblock_props/prop_color.php',
	)
);


// Регистрируем события
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('CIBlockPropertyCRM', 'GetUserTypeDescription'));
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('CIBlockPropertyColor', 'GetUserTypeDescription'));
