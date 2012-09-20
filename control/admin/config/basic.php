<?php  defined ( 'IN_KEKE' ) or exit ( 'Access Denied' );
/**
 * 全局配置管理控制层
 * @author michael
 *
 */
class Control_admin_config_basic extends  Controller {

	function action_index($type=NULL){
		//定义全局变量与语言包，只要加载模板，这个是必须要定义.操
		global $_K,$_lang;
	 	//基本uri,当前请求的uri ,本来是能通过Rotu类可以得出这个uri,为了程序灵活点，自己手写好了
		$base_uri = BASE_URL."/index.php/admin/config_basic";
		//定义配置类型，默认为web型 
		//列表数据
		$config_arr = Keke::$_sys_config;
		//语言列表
		$lang_arr = Keke::$_lang_list;
		//默认为系统配置模板
		if(isset($_GET['type'])){
			$type = $_GET['type'];
		}elseif(!isset($type)){
			$type = 'web';
		}
		
		require Keke_tpl::template('control/admin/tpl/config/'.$type);
	}
	/**
	 * 基本配置
	 */
	function action_basic(){
		$this->action_index('basic');
	}
	/**
	 * seo配置 
	 */
	function action_seo(){
		$this->action_index('seo');
	}
	/**
	 * 邮件配置
	 */
	function action_mail(){
		$this->action_index('mail');
	}
	
	function action_save(){
		$_POST = Keke_tpl::chars($_POST);
		//防止跨域提交，你懂的
		Keke::formcheck($_POST['formhash']);
		$type = $_POST['type'];
		//这里怎么说呢，定义生成sql 的字段=>值 的数组，你不懂，就是你太二了.
		$values = $_POST;
		unset($values['formhas']);
		unset($values['type']);
		foreach ($values as $k=>$v) {
			$where = "k = '$k'";
			DB::update('witkey_config')->set(array('v'))->value(array($v))->where($where)->execute();
		}
		Cache::instance()->del('keke_config');
		//执行完了，要给一个提示，这里没有对执行的结果做判断，是想偷下懒，如果执行失败的话，肯定给会报红的。亲!
		Keke::show_msg('系统提示','index.php/admin/config_basic/index?type='.$type,'提交成功','success');
		
	}
	
}
