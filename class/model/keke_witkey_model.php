<?php defined ('IN_KEKE' ) or die ( 'Access Denied' );
	class Keke_witkey_model  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_model' );		 }	    
	    		public function getModel_id(){			 return self::$_data ['model_id']; 		}		public function getModel_code(){			 return self::$_data ['model_code']; 		}		public function getModel_name(){			 return self::$_data ['model_name']; 		}		public function getModel_dir(){			 return self::$_data ['model_dir']; 		}		public function getModel_type(){			 return self::$_data ['model_type']; 		}		public function getModel_dev(){			 return self::$_data ['model_dev']; 		}		public function getModel_status(){			 return self::$_data ['model_status']; 		}		public function getModel_desc(){			 return self::$_data ['model_desc']; 		}		public function getOn_time(){			 return self::$_data ['on_time']; 		}		public function getHide_mode(){			 return self::$_data ['hide_mode']; 		}		public function getListorder(){			 return self::$_data ['listorder']; 		}		public function getModel_intro(){			 return self::$_data ['model_intro']; 		}		public function getIndus_bid(){			 return self::$_data ['indus_bid']; 		}		public function getConfig(){			 return self::$_data ['config']; 		}		public function getWhere(){			 return self::$_where; 		}
	    		public function setModel_id($value){ 			 self::$_data ['model_id'] = $value;			 return $this ; 		}		public function setModel_code($value){ 			 self::$_data ['model_code'] = $value;			 return $this ; 		}		public function setModel_name($value){ 			 self::$_data ['model_name'] = $value;			 return $this ; 		}		public function setModel_dir($value){ 			 self::$_data ['model_dir'] = $value;			 return $this ; 		}		public function setModel_type($value){ 			 self::$_data ['model_type'] = $value;			 return $this ; 		}		public function setModel_dev($value){ 			 self::$_data ['model_dev'] = $value;			 return $this ; 		}		public function setModel_status($value){ 			 self::$_data ['model_status'] = $value;			 return $this ; 		}		public function setModel_desc($value){ 			 self::$_data ['model_desc'] = $value;			 return $this ; 		}		public function setOn_time($value){ 			 self::$_data ['on_time'] = $value;			 return $this ; 		}		public function setHide_mode($value){ 			 self::$_data ['hide_mode'] = $value;			 return $this ; 		}		public function setListorder($value){ 			 self::$_data ['listorder'] = $value;			 return $this ; 		}		public function setModel_intro($value){ 			 self::$_data ['model_intro'] = $value;			 return $this ; 		}		public function setIndus_bid($value){ 			 self::$_data ['indus_bid'] = $value;			 return $this ; 		}		public function setConfig($value){ 			 self::$_data ['config'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_where = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = array_filter($array); 			return $this; 		} 
	    /**		 * insert into  keke_witkey_model  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_model		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['model_id'] )) { 						self::$_where = array ('model_id' => self::$_data ['model_id'] );						unset(self::$_data['model_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_model,if isset where return where record,else return all record		 * @return array 		 */		function query($fields = '*',$cache_time = 0){ 			 empty ( $fields ) and $fields = '*';			 if($this->getWhere()){ 				 $sql = "select $fields from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select $fields from $this->_tablename"; 			 } 			 empty($fields) and $fields = '*'; 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_model records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_model, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where model_id = $this->_model_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 