<?php
/**
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-libs
 * @subpackage leightbox
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Libs_LeightboxInstall extends ModuleInstall {

	public static function install() {
		Base_ThemeCommon::install_default_theme('Libs/Leightbox');
		return true;
	}
	
	public static function uninstall() {
		Base_ThemeCommon::uninstall_default_theme('Libs/Leightbox');
		return true;
	}
	public static function version() {
		return array("2.03.3");
	}
	
	public static function requires_0() {
		return array(array('name'=>'Base/Theme','version'=>0),
			array('name'=>'Libs/ScriptAculoUs','version'=>0));
	}
}

?>