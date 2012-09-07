<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_hire  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_hire' );		 }	    
	    		public function getHire_id(){			 return self::$_data ['hire_id']; 		}		public function getUid(){			 return self::$_data ['uid']; 		}		public function getUsername(){			 return self::$_data ['username']; 		}		public function getEuid(){			 return self::$_data ['euid']; 		}		public function getEusername(){			 return self::$_data ['eusername']; 		}		public function getPrice(){			 return self::$_data ['price']; 		}		public function getTitle(){			 return self::$_data ['title']; 		}		public function getHire_status(){			 return self::$_data ['hire_status']; 		}		public function getOpen_step(){			 return self::$_data ['open_step']; 		}		public function getContent(){			 return self::$_data ['content']; 		}		public function getBuyer_status(){			 return self::$_data ['buyer_status']; 		}		public function getSeller_status(){			 return self::$_data ['seller_status']; 		}		public function getWish_time(){			 return self::$_data ['wish_time']; 		}		public function getDateline(){			 return self::$_data ['dateline']; 		}		public function getUnique_num(){			 return self::$_data ['unique_num']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setHire_id($value){ 			 self::$_data ['hire_id'] = $value;			 return $this ; 		}		public function setUid($value){ 			 self::$_data ['uid'] = $value;			 return $this ; 		}		public function setUsername($value){ 			 self::$_data ['username'] = $value;			 return $this ; 		}		public function setEuid($value){ 			 self::$_data ['euid'] = $value;			 return $this ; 		}		public function setEusername($value){ 			 self::$_data ['eusername'] = $value;			 return $this ; 		}		public function setPrice($value){ 			 self::$_data ['price'] = $value;			 return $this ; 		}		public function setTitle($value){ 			 self::$_data ['title'] = $value;			 return $this ; 		}		public function setHire_status($value){ 			 self::$_data ['hire_status'] = $value;			 return $this ; 		}		public function setOpen_step($value){ 			 self::$_data ['open_step'] = $value;			 return $this ; 		}		public function setContent($value){ 			 self::$_data ['content'] = $value;			 return $this ; 		}		public function setBuyer_status($value){ 			 self::$_data ['buyer_status'] = $value;			 return $this ; 		}		public function setSeller_status($value){ 			 self::$_data ['seller_status'] = $value;			 return $this ; 		}		public function setWish_time($value){ 			 self::$_data ['wish_time'] = $value;			 return $this ; 		}		public function setDateline($value){ 			 self::$_data ['dateline'] = $value;			 return $this ; 		}		public function setUnique_num($value){ 			 self::$_data ['unique_num'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_hire  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_hire		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['hire_id'] )) { 						self::$_where = array ('hire_id' => self::$_data ['hire_id'] );						unset(self::$_data['hire_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_hire,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_hire records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_hire, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where hire_id = $this->_hire_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 