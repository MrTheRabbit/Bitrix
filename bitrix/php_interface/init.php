<?
include_once($_SERVER["DOCUMENT_ROOT"].'/bitrix/php_interface/include/prop_crm.php');
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('CIBlockPropertyCRM', 'GetUserTypeDescription'));