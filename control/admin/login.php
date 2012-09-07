<?php  defined ( "IN_KEKE" ) or die ( "Access Denied" );
class Control_admin_login extends Controller {
	protected $admin_obj = null;
	
	// ϵͳ��ʼ��
	function before() {
		$this->admin_obj = new keke_admin_class ();
	}
	/**
	 * �ж���û�е�¼�������¼�ˣ�����index.php
	 * ���û�е�¼������ʼ����¼ҳ��
	 */
	function action_index() {
		global $_K, $_lang;
		// group_id > 0 ��ʾ��
		
		if ($_SESSION ['admin_uid'] and $_K ['user_info'] ['group_id']) {
			// �Ѿ���¼�ˣ�������ҳ
			$this->request->redirect('/admin/index');
		} else {
			// ��ʼ����¼ҳ��
			$login_limit = $_SESSION ['login_limit']; // �û���¼����ʱ��
			$remain_times = $login_limit - time (); // �����ٴε�¼ʱ��
			$allow_times = $this->admin_obj->times_limit ();
			require Keke_tpl::template ( 'control/admin/tpl/login' );
		}
	}
	/**
	 * �û���¼
	 */
	function action_login() {
		
		if (Keke::formcheck ( $_POST ['token'] )) {
			
			// ��֤�û������벻��Ϊ��!
			$p = Keke_validation::factory ( $_POST )->rule ( 'user_name', 'Keke_valid::not_empty' )->rule ( 'pass_word', 'Keke_valid::not_empty' );
			if (!$p->check ()) {
				$e = $p->errors ();
				Keke::admin_show_msg ( 'ϵͳ��ʾ', 'index.php/admin/login', $e, 2, 'warning' );
			}
			
			$user_name = Keke::utftogbk ( $_POST ['user_name'] );
			$this->admin_obj->admin_login ( $_POST ['user_name'], $_POST ['pass_word'], $_POST ['allow_num'], $_POST ['token'] );
		}
	}
}
//end
 