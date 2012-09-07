<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_task_bid  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_task_bid' );		 }	    
	    		public function getBid_id(){			 return self::$_data ['bid_id']; 		}		public function getTask_id(){			 return self::$_data ['task_id']; 		}		public function getUid(){			 return self::$_data ['uid']; 		}		public function getUsername(){			 return self::$_data ['username']; 		}		public function getQuote(){			 return self::$_data ['quote']; 		}		public function getCycle(){			 return self::$_data ['cycle']; 		}		public function getArea(){			 return self::$_data ['area']; 		}		public function getMessage(){			 return self::$_data ['message']; 		}		public function getBid_status(){			 return self::$_data ['bid_status']; 		}		public function getBid_time(){			 return self::$_data ['bid_time']; 		}		public function getHidden_status(){			 return self::$_data ['hidden_status']; 		}		public function getExt_status(){			 return self::$_data ['ext_status']; 		}		public function getComment_num(){			 return self::$_data ['comment_num']; 		}		public function getIs_view(){			 return self::$_data ['is_view']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setBid_id($value){ 			 self::$_data ['bid_id'] = $value;			 return $this ; 		}		public function setTask_id($value){ 			 self::$_data ['task_id'] = $value;			 return $this ; 		}		public function setUid($value){ 			 self::$_data ['uid'] = $value;			 return $this ; 		}		public function setUsername($value){ 			 self::$_data ['username'] = $value;			 return $this ; 		}		public function setQuote($value){ 			 self::$_data ['quote'] = $value;			 return $this ; 		}		public function setCycle($value){ 			 self::$_data ['cycle'] = $value;			 return $this ; 		}		public function setArea($value){ 			 self::$_data ['area'] = $value;			 return $this ; 		}		public function setMessage($value){ 			 self::$_data ['message'] = $value;			 return $this ; 		}		public function setBid_status($value){ 			 self::$_data ['bid_status'] = $value;			 return $this ; 		}		public function setBid_time($value){ 			 self::$_data ['bid_time'] = $value;			 return $this ; 		}		public function setHidden_status($value){ 			 self::$_data ['hidden_status'] = $value;			 return $this ; 		}		public function setExt_status($value){ 			 self::$_data ['ext_status'] = $value;			 return $this ; 		}		public function setComment_num($value){ 			 self::$_data ['comment_num'] = $value;			 return $this ; 		}		public function setIs_view($value){ 			 self::$_data ['is_view'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_task_bid  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_task_bid		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['bid_id'] )) { 						self::$_where = array ('bid_id' => self::$_data ['bid_id'] );						unset(self::$_data['bid_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_task_bid,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_task_bid records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_task_bid, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where bid_id = $this->_bid_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 