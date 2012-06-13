<?php
	class Keke_witkey_task_frost  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_task_frost' );		 }	    
	    		public function getFrost_id(){			 return self::$_data ['frost_id']; 		}		public function getFrost_status(){			 return self::$_data ['frost_status']; 		}		public function getTask_id(){			 return self::$_data ['task_id']; 		}		public function getFrost_time(){			 return self::$_data ['frost_time']; 		}		public function getRestore_time(){			 return self::$_data ['restore_time']; 		}		public function getAdmin_uid(){			 return self::$_data ['admin_uid']; 		}		public function getAdmin_username(){			 return self::$_data ['admin_username']; 		}		public function getWhere(){			 return self::$_data ['where']; 		}
	    		public function setFrost_id($value){ 			 self::$_data ['frost_id'] = $value;			 return $this ; 		}		public function setFrost_status($value){ 			 self::$_data ['frost_status'] = $value;			 return $this ; 		}		public function setTask_id($value){ 			 self::$_data ['task_id'] = $value;			 return $this ; 		}		public function setFrost_time($value){ 			 self::$_data ['frost_time'] = $value;			 return $this ; 		}		public function setRestore_time($value){ 			 self::$_data ['restore_time'] = $value;			 return $this ; 		}		public function setAdmin_uid($value){ 			 self::$_data ['admin_uid'] = $value;			 return $this ; 		}		public function setAdmin_username($value){ 			 self::$_data ['admin_username'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_data ['where'] = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = $array; 			return $this; 		} 
	    /**		 * insert into  keke_witkey_task_frost  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_task_frost		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['frost_id'] )) { 						self::$_data ['where'] = array ('frost_id' => self::$_data ['frost_id'] );						unset(self::$_data['frost_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_task_frost,if isset where return where record,else return all record		 * @return array 		 */		function query($cache_time = 0){ 			 if($this->getWhere()){ 				 $sql = "select * from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select * from $this->_tablename"; 			 } 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_task_frost records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_task_frost, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where frost_id = $this->_frost_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 