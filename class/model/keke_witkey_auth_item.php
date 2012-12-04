<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_auth_item  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_auth_item' );		 }	    
	    		public function getAuth_code(){			 return self::$_data ['auth_code']; 		}		public function getAuth_title(){			 return self::$_data ['auth_title']; 		}		public function getAuth_day(){			 return self::$_data ['auth_day']; 		}		public function getAuth_small_ico(){			 return self::$_data ['auth_small_ico']; 		}		public function getAuth_small_n_ico(){			 return self::$_data ['auth_small_n_ico']; 		}		public function getAuth_big_ico(){			 return self::$_data ['auth_big_ico']; 		}		public function getAuth_desc(){			 return self::$_data ['auth_desc']; 		}		public function getAuth_cash(){			 return self::$_data ['auth_cash']; 		}		public function getAuth_expir(){			 return self::$_data ['auth_expir']; 		}		public function getAuth_open(){			 return self::$_data ['auth_open']; 		}		public function getAuth_show(){			 return self::$_data ['auth_show']; 		}		public function getMuti_auth(){			 return self::$_data ['muti_auth']; 		}		public function getUpdate_time(){			 return self::$_data ['update_time']; 		}		public function getListorder(){			 return self::$_data ['listorder']; 		}		public function getConfig(){			 return self::$_data ['config']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setAuth_code($value){ 			 self::$_data ['auth_code'] = $value;			 return $this ; 		}		public function setAuth_title($value){ 			 self::$_data ['auth_title'] = $value;			 return $this ; 		}		public function setAuth_day($value){ 			 self::$_data ['auth_day'] = $value;			 return $this ; 		}		public function setAuth_small_ico($value){ 			 self::$_data ['auth_small_ico'] = $value;			 return $this ; 		}		public function setAuth_small_n_ico($value){ 			 self::$_data ['auth_small_n_ico'] = $value;			 return $this ; 		}		public function setAuth_big_ico($value){ 			 self::$_data ['auth_big_ico'] = $value;			 return $this ; 		}		public function setAuth_desc($value){ 			 self::$_data ['auth_desc'] = $value;			 return $this ; 		}		public function setAuth_cash($value){ 			 self::$_data ['auth_cash'] = $value;			 return $this ; 		}		public function setAuth_expir($value){ 			 self::$_data ['auth_expir'] = $value;			 return $this ; 		}		public function setAuth_open($value){ 			 self::$_data ['auth_open'] = $value;			 return $this ; 		}		public function setAuth_show($value){ 			 self::$_data ['auth_show'] = $value;			 return $this ; 		}		public function setMuti_auth($value){ 			 self::$_data ['muti_auth'] = $value;			 return $this ; 		}		public function setUpdate_time($value){ 			 self::$_data ['update_time'] = $value;			 return $this ; 		}		public function setListorder($value){ 			 self::$_data ['listorder'] = $value;			 return $this ; 		}		public function setConfig($value){ 			 self::$_data ['config'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array,array('Model','remove_null')); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_auth_item  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_auth_item		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['auth_code'] )) { 						self::$_where = array ('auth_code' => self::$_data ['auth_code'] );						unset(self::$_data['auth_code']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_auth_item,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_auth_item records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_auth_item, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where auth_code = $this->_auth_code "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 