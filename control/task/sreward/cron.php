<?php  defined('IN_KEKE') OR die('access denied');
/**
 * 单赏任务计划执行类 
 * @author Michael 
 * @version 3.0 
 *
 */
class Control_task_sreward_cron extends Sys_task_cron {
     /**
      * 批量执行
      */
     function batch_run(){
        $this->jg_to_xg();
        $this->xg_to_gs();
        $this->gs_to_jf();
        $this->jf_to_hp();
        $this->hp_to_end();	
     }
     
     function jg_to_xg(){}
     function xg_to_gs(){}
     function gs_to_jf(){
     	
     }
     function jf_to_hp(){
     	
     }
     function hp_to_end(){
     	
     }
	
}
