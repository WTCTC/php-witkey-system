<?php
	class Keke_witkey_shop_cate  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_shop_cate' );		 }	    
	    		public function getCate_id(){			 return self::$_data ['cate_id']; 		}		public function getType(){			 return self::$_data ['type']; 		}		public function getShop_id(){			 return self::$_data ['shop_id']; 		}		public function getCate_name(){			 return self::$_data ['cate_name']; 		}		public function getWhere(){			 return self::$_data ['where']; 		}
	    		public function setCate_id($value){ 			 self::$_data ['cate_id'] = $value;			 return $this ; 		}		public function setType($value){ 			 self::$_data ['type'] = $value;			 return $this ; 		}		public function setShop_id($value){ 			 self::$_data ['shop_id'] = $value;			 return $this ; 		}		public function setCate_name($value){ 			 self::$_data ['cate_name'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_data ['where'] = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = $array; 			return $this; 		} 
	    /**		 * insert into  keke_witkey_shop_cate  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_shop_cate		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['cate_id'] )) { 						self::$_data ['where'] = array ('cate_id' => self::$_data ['cate_id'] );						unset(self::$_data['cate_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_shop_cate,if isset where return where record,else return all record		 * @return array 		 */		function query($cache_time = 0){ 			 if($this->getWhere()){ 				 $sql = "select * from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select * from $this->_tablename"; 			 } 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_shop_cate records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_shop_cate, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where cate_id = $this->_cate_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 