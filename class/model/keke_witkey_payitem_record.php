<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_payitem_record  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_payitem_record' );		 }	    
	    		public function getRecord_id(){			 return self::$_data ['record_id']; 		}		public function getItem_code(){			 return self::$_data ['item_code']; 		}		public function getUse_type(){			 return self::$_data ['use_type']; 		}		public function getUid(){			 return self::$_data ['uid']; 		}		public function getUsername(){			 return self::$_data ['username']; 		}		public function getObj_type(){			 return self::$_data ['obj_type']; 		}		public function getObj_id(){			 return self::$_data ['obj_id']; 		}		public function getPobj_id(){			 return self::$_data ['pobj_id']; 		}		public function getUse_cash(){			 return self::$_data ['use_cash']; 		}		public function getUse_num(){			 return self::$_data ['use_num']; 		}		public function getOn_time(){			 return self::$_data ['on_time']; 		}		public function getEnd_time(){			 return self::$_data ['end_time']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setRecord_id($value){ 			 self::$_data ['record_id'] = $value;			 return $this ; 		}		public function setItem_code($value){ 			 self::$_data ['item_code'] = $value;			 return $this ; 		}		public function setUse_type($value){ 			 self::$_data ['use_type'] = $value;			 return $this ; 		}		public function setUid($value){ 			 self::$_data ['uid'] = $value;			 return $this ; 		}		public function setUsername($value){ 			 self::$_data ['username'] = $value;			 return $this ; 		}		public function setObj_type($value){ 			 self::$_data ['obj_type'] = $value;			 return $this ; 		}		public function setObj_id($value){ 			 self::$_data ['obj_id'] = $value;			 return $this ; 		}		public function setPobj_id($value){ 			 self::$_data ['pobj_id'] = $value;			 return $this ; 		}		public function setUse_cash($value){ 			 self::$_data ['use_cash'] = $value;			 return $this ; 		}		public function setUse_num($value){ 			 self::$_data ['use_num'] = $value;			 return $this ; 		}		public function setOn_time($value){ 			 self::$_data ['on_time'] = $value;			 return $this ; 		}		public function setEnd_time($value){ 			 self::$_data ['end_time'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array,array('Model','remove_null')); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_payitem_record  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_payitem_record		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['record_id'] )) { 						self::$_where = array ('record_id' => self::$_data ['record_id'] );						unset(self::$_data['record_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_payitem_record,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_payitem_record records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_payitem_record, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where record_id = $this->_record_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 