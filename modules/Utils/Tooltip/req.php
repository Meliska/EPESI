<?php
/**
 * WARNING: This is a commercial software
 * Please see the included license.html file for more information
 *
 * Warehouse - Items Orders
 *
 * @author Arkadiusz Bisaga <abisaga@telaxus.com>
 * @copyright Copyright &copy; 2008, Telaxus LLC
 * @license Commercial
 * @version 1.0
 * @package epesi-premium
 * @subpackage warehouse-items-orders
 */
if(!isset($_POST['tooltip_id']) || !isset($_POST['cid']))
	die('Invalid request'.print_r($_POST,true));

define('JS_OUTPUT',1);
define('CID',$_POST['cid']); 
require_once('../../../include.php');
ModuleManager::load_modules();

if (!isset($_SESSION['client']['utils_tooltip']['callbacks'][$_POST['tooltip_id']]))
	die(serialize($_POST['tooltip_id']).'Invalid tooltip'.print_r($_SESSION['client']['utils_tooltip'],true));

$callback = $_SESSION['client']['utils_tooltip']['callbacks'][$_POST['tooltip_id']]['callback'];
$args = $_SESSION['client']['utils_tooltip']['callbacks'][$_POST['tooltip_id']]['args'];

print(call_user_func_array($callback, $args));
?>