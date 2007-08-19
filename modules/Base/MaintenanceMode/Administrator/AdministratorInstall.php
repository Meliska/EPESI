<?php
/**
 * MaintenanceMode_AdministratorInstall class.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-base-extra
 * @subpackage maintenance-mode-administrator
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Base_MaintenanceMode_AdministratorInstall extends ModuleInstall {
	public static function install() {
		return true;
	}
	
	public static function uninstall() {
		return true;
	}
	
	public static function version() {
		return array('1.0.0');
	}
	public static function requires_0() {
		return array(
			array('name'=>'Libs/QuickForm','version'=>0), 
			array('name'=>'Base/Lang', 'version'=>0),
			array('name'=>'Base/Admin','version'=>0),
			array('name'=>'Base/MaintenanceMode','version'=>0),
			array('name'=>'Base/Acl','version'=>0));
	}
}

?>
