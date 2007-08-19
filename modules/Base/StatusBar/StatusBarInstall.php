<?php
/**
 * Fancy statusbar.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-base-extra
 * @subpackage statusbar
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Base_StatusBarInstall extends ModuleInstall {
	public static function install() {
		Base_ThemeCommon::install_default_theme('Base/StatusBar');
		return true;
	}
	
	public static function uninstall() {
		Base_ThemeCommon::uninstall_default_theme('Base/StatusBar');
		return true;
	}
	
	public static function version() {
		return array('1.0.0');
	}
	public static function requires_0() {
		return array(array('name'=>'Libs/ScriptAculoUs','version'=>0));
	}
}

?>
