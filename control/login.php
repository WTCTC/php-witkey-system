<?php defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );

/**
 *
 * @copyright keke-tech
 * @author Michael
 * @version v 2.2 2012-11-06
 *          
 */
class Control_login extends Controller {
	/**
	 * 登录页面
	 */
	function action_index() {
		global $_K, $_lang;
		 
		require Keke_tpl::template ( 'login' );
	}
	/**
	 * 用户登录
	 */
	function action_login() {
		
		global $_K;
		Keke::formcheck ( $_POST ['formhash'] );
		$_POST = Keke_tpl::chars ( $_POST );
		$account = $_POST ['txt_account'];
		$pwd = $_POST ['pwd_password'];
		$remember = (bool)$_POST['auto_login'];
		$type = $this->get_account_type($account);
		$login_obj = Keke_user_login::instance ();
		$login_obj->set_username ( $account )->set_pwd($pwd)->set_remember_me($remember);
	 	
		$res = $login_obj->login ($type);
		
		$uri = 'login';
		
		if(array_key_exists($res, Keke_user_login::$_status)){
			$t = 'error';
			$msg = Keke_user_login::$_status[$res];
		}else {
			$msg = '登录成功';
			$t = 'success';
			if($this->request->referrer()==$this->request->url(true)){
				$uri = 'user/index';
			}else{
				$uri = $this->request->referrer();
			}
		}
		Keke::show_msg ( $msg, $uri, $t );
	}
	/**
	 * 用登出
	 */
	function action_logout(){
		$res = Keke_user_login::instance()->logout();
		Keke::show_msg('成功退出'.$res,$this->request->uri(),'success');
// 		$this->refer();
	}
	/**
	 * 判断账号类型
	 * @param string $var
	 * @return int (1用户名,2手机或者uid,3邮箱)
	 */
	function get_account_type($var){
	     if(Keke_valid::email($var)){
	     	return 2;
	     }elseif(Keke_valid::phone($var)){
	     	return 1;
	     }else{
	     	return 0;
	     }
	}
} //end