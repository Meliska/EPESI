<?php
/**
 * @author Arkadiusz Bisaga <abisaga@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-tests
 * @subpackage comment
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_CommentInstall extends ModuleInstall{
	public static function install(){
		return true;
	}

	public static function uninstall() {
		return true;
	}
	public static function requires_0() {
		return array(array('name'=>'Utils/CatFile','version'=>0),
			array('name'=>'Utils/Comment','version'=>0));
	}
} 
?>
