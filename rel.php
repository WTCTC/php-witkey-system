<?php 
define ( 'IN_KEKE', TRUE );
include 'app_boot.php';

//空值判断


$a = NULL;$b = '';$c=false;
$d = array();

//var_dump(empty($d));

var_dump($d+(array)$a);

//$user =  Keke_sms::instance()->get_userinfo();
//http://www.kekezu.com/control/admin/index.php?do=comment&view=sms_list
//$time = date('Y-m-d H:i:s',time());
//Keke_sms::instance()->send('13545368115', '武汉客客，短信平台已开通,发送时间：'.$time);

die;

 