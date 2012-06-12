<?php
keke_lang_class::load_lang_class ( 'service_pay_return_class' );
final class service_pay_return_class extends Pay_return_base_class {
	
	function __construct($charge_type, $model_id = '', $uid = '', $obj_id = '', $order_id = '', $total_fee = '') {
		parent::__construct ( $charge_type, $model_id, $uid, $obj_id, $order_id, $total_fee );
	}
	
	/**
	 * 订单付款
	 * step1:检测订单状态
	 * case wait：
	 * step1：检查商品状态
	 * case 上架：付款，财务记录
	 * case 其他：终止订单
	 * case 其他: 不操作
		 
	 * @see pay_return_base_class::order_charge()
	 */
	function order_charge() {
		global $_K;
		$order_id = $this->_order_id;
		$sid = $this->_obj_id;
		$uid = $this->_uid;
		$user_info = $this->_userinfo;
		$order_info = dbfactory::get_one ( sprintf ( " select order_status,order_uid,order_username,seller_uid,seller_username from %switkey_order where order_id='%d'", TABLEPRE, $order_id ) );
		$url = $_K['siteurl'] . "/index.php?do=user&view=finance&op=order&obj_type=service&role=2&order_id=" . $order_id;
		$s_order_link = "<a href=\"" . $_K['siteurl'] . "/index.php?do=user&view=finance&op=order&obj_type=service&role=1&order_id=" . $order_id . "\">" . $order_info ['order_name'] . "</a>";
		$b_order_link = "<a href=\"" . $_K['siteurl'] . "/index.php?do=user&view=finance&op=order&obj_type=service&role=2&order_id=" . $order_id . "\">" . $order_info ['order_name'] . "</a>";
		if ($order_info ['order_status'] == 'wait') {
			$service_status = dbfactory::get_count ( sprintf ( " select service_status from %switkey_service where service_id='%d'", TABLEPRE, $sid ) );
			if ($service_status == '2') { //商品上架状态
				$res = keke_finance_class::cash_out ( $uid, $this->_total_fee,'buy_service', '0', 'service', $order_id );
				if ($res) {
					dbfactory::execute ( sprintf ( " update %switkey_order set order_status='ok' where order_id='%d'", TABLEPRE, $order_id ) );
					/** 通知买家*/
					$v_arr = array ($_lang['user'] => $_lang['you'], $_lang['action'] => $_lang['haved_confirm_pay'], $_lang['order_id'] => $order_id, $_lang['order_link'] => $b_order_link );
					keke_shop_class::notify_user ( $order_info ['order_uid'], $order_info ['order_username'], "order_change", $_lang['goods_order_confirm_pay'], $v_arr );
					/** 通知卖家*/
					$v_arr = array ($_lang['user'] => $order_info ['order_username'], $_lang['action'] => $_lang['haved_confirm_pay'], $_lang['order_id'] => $order_id, $_lang['order_link'] => $s_order_link );
					keke_shop_class::notify_user ( $order_info ['seller_uid'], $order_info ['seller_username'], "order_change", $_lang['goods_order_confirm_pay'], $v_arr );
					$notice = $_lang['service_pay_success'];
					$type = 'success';
				} else {
					$notice = $_lang['service_pay_fail'];
					$type = 'warning';
				}
			
			} else { //其他状态  直接关闭订单
				

				dbfactory::execute ( sprintf ( " update %switkey_order set order_status='close' where order_id='%d'", TABLEPRE, $order_id ) );
				/** 通知卖家*/
				$v_arr = array ($_lang['user'] => $_lang['system'], $_lang['action'] => $_lang['stop_your_order_and_your_cash_return'], $_lang['order_id'] => $order_id, $_lang['order_link'] => $s_order_link );
				keke_shop_class::notify_user ( $order_info ['seller_uid'], $order_info ['seller_username'], "order_change", $_lang['goods_order_close'], $v_arr );
				/** 通知买家*/
				$v_arr = array ($_lang['user'] => $_lang['system'], $_lang['action'] => $_lang['stop_your_order_and_your_cash_return'], $_lang['order_id'] => $order_id, $_lang['order_link'] => $b_order_link );
				keke_shop_class::notify_user ( $order_info ['order_uid'], $order_info ['order_username'], "order_change", $_lang['goods_order_close'], $v_arr );
				
				$notice = $_lang['service_pay_fail'];
				$type = 'warning';
			}
		} else {
			$notice = $_lang['service_pay_success'];
			$type = 'success';
		}
		return pay_return_fac_class::struct_response ( $_lang['operate_notice'], $notice, $url, $type );
	}
}