<?php defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
/**
 * @copyright keke-tech
 * @author Chen
 * @version v 2.0
 * @todo 后台认证项目安装、删除
 * 2011-9-01 11:35:13
 */
class Control_admin_user_auth extends Controller{
	function action_index(){
		global $_K,$_lang;
		require keke_tpl::template('control/admin/tpl/user/auth');
	}
}
/* Keke::admin_check_role ( 38 );

$auth_item_obj = new Keke_witkey_auth_item_class ();
$url = "index.php?do=$do&view=$view";

//删除认证项目
if ($ac === 'del') {
	keke_auth_fac_class::del_auth ( $auth_code, 'auth_item_cache_list' ); //单条删除
	Keke::admin_system_log ( $_lang['delete_auth'] . $auth_code ); //日志记录
} elseif (isset ( $sbt_add )) {
	keke_auth_fac_class::install_auth ( $auth_dir ); //增加认证项目
	Keke::admin_system_log ( $_lang['add_auth'] . $auth_dir ); //日志记录
} elseif (isset ( $sbt_action ) && $sbt_action === $_lang['mulit_delete']) { //批量删除
	keke_auth_fac_class::del_auth ( $ckb, 'auth_item_cache_list' ); //批量操作
	Keke::admin_system_log ( $_lang['mulit_delete_auth'] . $ckb );
} else {
	$where = ' 1 = 1  ';
	intval ( $page_size ) or $page_size = 10 and $page_size = intval ( $page_size );
	$auth_item_obj->setWhere ( $where );
	$count = $auth_item_obj->count_keke_witkey_auth_item ();
	$page or $page = 1 and $page = intval ( $page );
	$Keke->_page_obj->setAjax(1);
	$Keke->_page_obj->setAjaxDom("ajax_dom");
	$pages = $Keke->_page_obj->getPages ( $count, $page_size, $page, $url );
	$where .= " order by listorder asc ";
	$auth_item_obj->setWhere ( $where . $pages ['where'] );
	$auth_item_arr = $auth_item_obj->query_keke_witkey_auth_item ();
}

require $Keke->_tpl_obj->template ( 'control/admin/tpl/admin_' . $do . '_' . $view ); */