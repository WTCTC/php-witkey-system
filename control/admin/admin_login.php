<?php	defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
/**
 * 后台登录处理
 */


$login_limit = $_SESSION ['login_limit']; // 用户登录限制时间
$remain_times = $login_limit - time (); // 允许再次登录时差
$allow_times = $admin_obj->times_limit ( $allow_num ); // 允许登录尝试次数
if ($is_submit) {
	$user_name = kekezu::utftogbk ( $user_name );
	$admin_obj->admin_login ( $user_name, $pass_word, $allow_num, $token );
	die();
}
require keke_tpl_class::template ( 'control/admin/tpl/admin_' . $do );