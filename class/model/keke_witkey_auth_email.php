<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_auth_email  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_auth_email' );		 }	    
	    		public function getEmail_a_id(){			 return self::$_data ['email_a_id']; 		}		public function getUid(){			 return self::$_data ['uid']; 		}		public function getUsername(){			 return self::$_data ['username']; 		}		public function getEmail(){			 return self::$_data ['email']; 		}		public function getCash(){			 return self::$_data ['cash']; 		}		public function getAuth_time(){			 return self::$_data ['auth_time']; 		}		public function getStart_time(){			 return self::$_data ['start_time']; 		}		public function getEnd_time(){			 return self::$_data ['end_time']; 		}		public function getAuth_status(){			 return self::$_data ['auth_status']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setEmail_a_id($value){ 			 self::$_data ['email_a_id'] = $value;			 return $this ; 		}		public function setUid($value){ 			 self::$_data ['uid'] = $value;			 return $this ; 		}		public function setUsername($value){ 			 self::$_data ['username'] = $value;			 return $this ; 		}		public function setEmail($value){ 			 self::$_data ['email'] = $value;			 return $this ; 		}		public function setCash($value){ 			 self::$_data ['cash'] = $value;			 return $this ; 		}		public function setAuth_time($value){ 			 self::$_data ['auth_time'] = $value;			 return $this ; 		}		public function setStart_time($value){ 			 self::$_data ['start_time'] = $value;			 return $this ; 		}		public function setEnd_time($value){ 			 self::$_data ['end_time'] = $value;			 return $this ; 		}		public function setAuth_status($value){ 			 self::$_data ['auth_status'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_auth_email  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_auth_email		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['email_a_id'] )) { 						self::$_where = array ('email_a_id' => self::$_data ['email_a_id'] );						unset(self::$_data['email_a_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_auth_email,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_auth_email records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_auth_email, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where email_a_id = $this->_email_a_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 