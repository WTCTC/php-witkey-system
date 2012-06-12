<?php

final class preward_time_class extends time_base_class {

	function __construct() {
		parent::__construct ();
	}
	function validtaskstatus() {
		$this->task_hand_end();
		$this->task_choose_end();	
	}
	/**
	 * 交稿期处理
	 */
	public function task_hand_end() {		
		$task_list = dbfactory::query(sprintf("select * from %switkey_task where task_status=2 and sub_time<'%s' and model_id=3",TABLEPRE,time()));
		
		if(is_array($task_list)){
			foreach($task_list as $v){
				$task_obj = preward_task_class::get_instance($v);
				$task_obj->task_jg_timeout();
			}
		}		
	}
	/**
	 * 选稿期处理
	 */
	function task_choose_end() {
		$task_list = dbfactory::query(sprintf("select * from %switkey_task where task_status=3 and end_time<'%s' and model_id=3",TABLEPRE,time()));
		if(is_array($task_list)){
			foreach($task_list as $v){
				$task_obj = preward_task_class::get_instance($v);
				$task_obj->task_xg_timeout();
			}
		}
		
	}
	
}
?>