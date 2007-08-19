<?php
/**
 * Lang_AdministratorInstall class.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-base-extra
 * @subpackage lang-administrator
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Base_Lang_AdministratorInstall extends ModuleInstall {
	public static function version() {
		return array('1.0.0');
	}
	
	public static function install() {
		return Variable::set('allow_lang_change',true);
	}
	
	public static function uninstall() {
		return Variable::delete('allow_lang_change');
	}
	public static function requires_0() {
		return array(
			array('name'=>'Base/Admin','version'=>0), 
			array('name'=>'Base/Acl','version'=>0), 
			array('name'=>'Libs/QuickForm','version'=>0), 
			array('name'=>'Base/User','version'=>0), 
			array('name'=>'Utils/GenericBrowser','version'=>0), 
			array('name'=>'Base/User/Settings','version'=>0), // TODO: not required directly but needed to make this module fully operational. Should we delete the requirement? 
			array('name'=>'Base/Lang','version'=>0));
	}
}

?>
