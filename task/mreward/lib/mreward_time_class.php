<?php

final class mreward_time_class extends time_base_class {

	function __construct() {
		parent::__construct ();
	}
	function validtaskstatus() {
		$this->task_tg_timeout();
		$this->task_xg_timeout();
		$this->task_gs_timeout ();
	}
	/**
	 * 投稿期结束，进入选稿期
	 */
	function  task_tg_timeout(){
		$task_tg = dbfactory::query(sprintf("select * from %switkey_task where model_id=2 and task_status=2 and '%d' > sub_time",TABLEPRE,time()));
		if(is_array($task_tg)){
			foreach ($task_tg as $k=>$v)  {
				$task_tg_obj = mreward_task_class::get_instance($v);
				$task_tg_obj->task_tg_timeout();
			}
		}
	}
	/**
	 * 选稿期结束，进入公示期
	 */
	function task_xg_timeout() {
		$task_xg = dbfactory::query(sprintf("select * from %switkey_task where model_id=2 and task_status=3 and '%d' > end_time",TABLEPRE,time()));
		if(is_array($task_xg)){
		foreach ( $task_xg as $k => $v ) {
			$task_xg_obj = mreward_task_class::get_instance($v);
			$task_xg_obj->task_xg_timeout ();
		 }
		}
	}
	/**
	 * 公式中结束
	 */
	function task_gs_timeout() {
		$task_gs = dbfactory::query(sprintf("select * from %switkey_task where model_id=2 and task_status=5 and '%d' > sp_end_time",TABLEPRE,time()));
		if(is_array($task_gs)){
		foreach ( $task_gs as $k => $v ) {
			$task_gs_obj = mreward_task_class::get_instance ( $v );
			$task_gs_obj->task_gs_timeout ();
		}
		}
	}

}
?>