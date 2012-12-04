<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_ad_target  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_ad_target' );		 }	    
	    		public function getTarget_id(){			 return self::$_data ['target_id']; 		}		public function getName(){			 return self::$_data ['name']; 		}		public function getCode(){			 return self::$_data ['code']; 		}		public function getDescription(){			 return self::$_data ['description']; 		}		public function getTargets(){			 return self::$_data ['targets']; 		}		public function getPosition(){			 return self::$_data ['position']; 		}		public function getAd_size(){			 return self::$_data ['ad_size']; 		}		public function getAd_num(){			 return self::$_data ['ad_num']; 		}		public function getSample_pic(){			 return self::$_data ['sample_pic']; 		}		public function getIs_allow(){			 return self::$_data ['is_allow']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setTarget_id($value){ 			 self::$_data ['target_id'] = $value;			 return $this ; 		}		public function setName($value){ 			 self::$_data ['name'] = $value;			 return $this ; 		}		public function setCode($value){ 			 self::$_data ['code'] = $value;			 return $this ; 		}		public function setDescription($value){ 			 self::$_data ['description'] = $value;			 return $this ; 		}		public function setTargets($value){ 			 self::$_data ['targets'] = $value;			 return $this ; 		}		public function setPosition($value){ 			 self::$_data ['position'] = $value;			 return $this ; 		}		public function setAd_size($value){ 			 self::$_data ['ad_size'] = $value;			 return $this ; 		}		public function setAd_num($value){ 			 self::$_data ['ad_num'] = $value;			 return $this ; 		}		public function setSample_pic($value){ 			 self::$_data ['sample_pic'] = $value;			 return $this ; 		}		public function setIs_allow($value){ 			 self::$_data ['is_allow'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array,array('Model','remove_null')); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_ad_target  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_ad_target		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['target_id'] )) { 						self::$_where = array ('target_id' => self::$_data ['target_id'] );						unset(self::$_data['target_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_ad_target,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_ad_target records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_ad_target, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where target_id = $this->_target_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 