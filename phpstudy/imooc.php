<?php
//获得参数 signature nonce token timestamp
$nonce = $_GET['nonce'];
$token = 'dzc';
$timestamp = $_GET['timestamp'];
$echostr = $_GET['echostr'];
$signature = $_GET['signature'];
//形成数组然后按照字典序排序
$array = array();
$array = array($nonce,$timestamp,$token);
//echo var_dump($array);
sort($array);
//echo var_dump($array);

//拼接成字符串，sha1加密，然后与signature进行校验
$str = sha1(implode('',$array));
//echo $str;
if ($str == $signature  ) {
	# 第一次接入weixn api接口的时候
	echo $_GET['echostr'];
	exit;
}
?>
