<?php  defined ( "IN_KEKE" ) or die ( "Access Denied" );
/**
 * �û�����-�˺Ź�����ҳ-�û���ֵ
 * @author Michael
 * @version 2.2
   2012-10-25
 */

class Control_user_finance_offrecharge extends Control_user{
    
	/**
	 * @var һ���˵�ѡ����
	 */
	protected static $_default = 'finance';
    /**
     * 
     * @var �����˵�ѡ����,��ֵ����ѡ��
     */
	protected static $_left = 'recharge';
	
	function action_index(){
		$fields = '`pay_id`,`payment`,`type`,`pay_user`,`pay_name`,`pay_account`,`pay_tel`,`status`';
		
		$base_uri = BASE_URL.'/index.php/finance/offrecharge';
		$del_uri = $base_uri.'/del';
		$count = intval($_GET['count']);
		$this->_default_ord_field = 'pay_id';
		//��ȡ��ҳ����
		extract($this->get_url($base_uri));
		//����
		$where .= " and type = 'offline' and status = 1 ";
		
		$data_info = Model::factory('witkey_pay_api')->get_grid($fields,$where,$uri,$order,$page,$count,$_GET['page_size']);
		
		$data_list = $data_info['data'];
// 		var_dump($data_list);
		//��ʾ��ҳ��ҳ��
		$pages = $data_info['pages'];
		
		require Keke_tpl::template('user/finance/offrecharge');
	}
	function action_save(){
		Keke::formcheck($_POST['formhash']);
		$_POST = Keke_tpl::chars($_POST);//��sqlע��
		$cert_pic = keke_file_class::upload_file('cert_pic');
		$array = array(
				//'type'=>'offline',	
				//'bank'=>$_POST['recharge_bank'],
				'uid'=>$_SESSION['uid'],
				'username'=>$_SESSION['username'],
				'pay_id'=>$_POST['pay_id'],
				'cash'=>$_POST['recharge_cash'],
				'status'=>'wait',
				'recharge_pic'=>$cert_pic,
				'pay_time'=>time(),
				);
				
		Model::factory('witkey_recharge')->setData($array)->create();
		$this->request->redirect('user/finance_recharges');
		
	}

}