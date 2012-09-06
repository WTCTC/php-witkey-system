<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_task_dx_work_info  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_task_dx_work_info' );		 }	    
	    		public function getDx_work_info_id(){			 return self::$_data ['dx_work_info_id']; 		}		public function getDx_work_id(){			 return self::$_data ['dx_work_id']; 		}		public function getWork_id(){			 return self::$_data ['work_id']; 		}		public function getTask_id(){			 return self::$_data ['task_id']; 		}		public function getWork_pic(){			 return self::$_data ['work_pic']; 		}		public function getWork_status(){			 return self::$_data ['work_status']; 		}		public function getWork_time(){			 return self::$_data ['work_time']; 		}		public function getUid(){			 return self::$_data ['uid']; 		}		public function getUsername(){			 return self::$_data ['username']; 		}		public function getWork_desc(){			 return self::$_data ['work_desc']; 		}		public function getAccount_id(){			 return self::$_data ['account_id']; 		}		public function getAccount_name(){			 return self::$_data ['account_name']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setDx_work_info_id($value){ 			 self::$_data ['dx_work_info_id'] = $value;			 return $this ; 		}		public function setDx_work_id($value){ 			 self::$_data ['dx_work_id'] = $value;			 return $this ; 		}		public function setWork_id($value){ 			 self::$_data ['work_id'] = $value;			 return $this ; 		}		public function setTask_id($value){ 			 self::$_data ['task_id'] = $value;			 return $this ; 		}		public function setWork_pic($value){ 			 self::$_data ['work_pic'] = $value;			 return $this ; 		}		public function setWork_status($value){ 			 self::$_data ['work_status'] = $value;			 return $this ; 		}		public function setWork_time($value){ 			 self::$_data ['work_time'] = $value;			 return $this ; 		}		public function setUid($value){ 			 self::$_data ['uid'] = $value;			 return $this ; 		}		public function setUsername($value){ 			 self::$_data ['username'] = $value;			 return $this ; 		}		public function setWork_desc($value){ 			 self::$_data ['work_desc'] = $value;			 return $this ; 		}		public function setAccount_id($value){ 			 self::$_data ['account_id'] = $value;			 return $this ; 		}		public function setAccount_name($value){ 			 self::$_data ['account_name'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_task_dx_work_info  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_task_dx_work_info		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['dx_work_info_id'] )) { 						self::$_where = array ('dx_work_info_id' => self::$_data ['dx_work_info_id'] );						unset(self::$_data['dx_work_info_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_task_dx_work_info,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_task_dx_work_info records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_task_dx_work_info, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where dx_work_info_id = $this->_dx_work_info_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 