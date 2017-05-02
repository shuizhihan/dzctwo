<?php
$module=isset($_GET['m'])?$_GET['m']:'index';
$action=isset($_GET['a'])?$_GET['a']:'index';
$index = new index();
$index->index();
class index{
	function __construct(){
	echo 'index<br>';
	}
	function index(){
	echo 'index---index<br>';
	}
}


define ('APP_DEBUG','TURE');
define ('APP_NAME','Application');
define ('APP_PATH','./Application/');

require ('./ThinkPHP/ThinkPHP.php');

?>