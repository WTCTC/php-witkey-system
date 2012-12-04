<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_prom_event  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_prom_event' );		 }	    
	    		public function getEvent_id(){			 return self::$_data ['event_id']; 		}		public function getEvent_desc(){			 return self::$_data ['event_desc']; 		}		public function getUid(){			 return self::$_data ['uid']; 		}		public function getUsername(){			 return self::$_data ['username']; 		}		public function getParent_uid(){			 return self::$_data ['parent_uid']; 		}		public function getParent_username(){			 return self::$_data ['parent_username']; 		}		public function getObj_id(){			 return self::$_data ['obj_id']; 		}		public function getRake_cash(){			 return self::$_data ['rake_cash']; 		}		public function getRake_credit(){			 return self::$_data ['rake_credit']; 		}		public function getEvent_status(){			 return self::$_data ['event_status']; 		}		public function getEvent_time(){			 return self::$_data ['event_time']; 		}		public function getAction(){			 return self::$_data ['action']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setEvent_id($value){ 			 self::$_data ['event_id'] = $value;			 return $this ; 		}		public function setEvent_desc($value){ 			 self::$_data ['event_desc'] = $value;			 return $this ; 		}		public function setUid($value){ 			 self::$_data ['uid'] = $value;			 return $this ; 		}		public function setUsername($value){ 			 self::$_data ['username'] = $value;			 return $this ; 		}		public function setParent_uid($value){ 			 self::$_data ['parent_uid'] = $value;			 return $this ; 		}		public function setParent_username($value){ 			 self::$_data ['parent_username'] = $value;			 return $this ; 		}		public function setObj_id($value){ 			 self::$_data ['obj_id'] = $value;			 return $this ; 		}		public function setRake_cash($value){ 			 self::$_data ['rake_cash'] = $value;			 return $this ; 		}		public function setRake_credit($value){ 			 self::$_data ['rake_credit'] = $value;			 return $this ; 		}		public function setEvent_status($value){ 			 self::$_data ['event_status'] = $value;			 return $this ; 		}		public function setEvent_time($value){ 			 self::$_data ['event_time'] = $value;			 return $this ; 		}		public function setAction($value){ 			 self::$_data ['action'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array,array('Model','remove_null')); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_prom_event  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_prom_event		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['event_id'] )) { 						self::$_where = array ('event_id' => self::$_data ['event_id'] );						unset(self::$_data['event_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_prom_event,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_prom_event records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_prom_event, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where event_id = $this->_event_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 