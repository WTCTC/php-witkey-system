<?php
	class Keke_witkey_article_category  extends Model {
	    protected static $_data = array ();
	     function  __construct(){ 			 parent::__construct ( 'witkey_article_category' );		 }	    
	    		public function getArt_cat_id(){			 return self::$_data ['art_cat_id']; 		}		public function getArt_cat_pid(){			 return self::$_data ['art_cat_pid']; 		}		public function getCat_name(){			 return self::$_data ['cat_name']; 		}		public function getListorder(){			 return self::$_data ['listorder']; 		}		public function getIs_show(){			 return self::$_data ['is_show']; 		}		public function getOn_time(){			 return self::$_data ['on_time']; 		}		public function getCat_type(){			 return self::$_data ['cat_type']; 		}		public function getArt_index(){			 return self::$_data ['art_index']; 		}		public function getWhere(){			 return self::$_data ['where']; 		}
	    		public function setArt_cat_id($value){ 			 self::$_data ['art_cat_id'] = $value;			 return $this ; 		}		public function setArt_cat_pid($value){ 			 self::$_data ['art_cat_pid'] = $value;			 return $this ; 		}		public function setCat_name($value){ 			 self::$_data ['cat_name'] = $value;			 return $this ; 		}		public function setListorder($value){ 			 self::$_data ['listorder'] = $value;			 return $this ; 		}		public function setIs_show($value){ 			 self::$_data ['is_show'] = $value;			 return $this ; 		}		public function setOn_time($value){ 			 self::$_data ['on_time'] = $value;			 return $this ; 		}		public function setCat_type($value){ 			 self::$_data ['cat_type'] = $value;			 return $this ; 		}		public function setArt_index($value){ 			 self::$_data ['art_index'] = $value;			 return $this ; 		}		public function setWhere($value){ 			 self::$_data ['where'] = $value;			 return $this; 		}		public function setData($array){ 			self::$_data = $array; 			return $this; 		} 
	    /**		 * insert into  keke_witkey_article_category  ,or add new record		 * @return int last_insert_id		 */		function create($return_last_id=1){		 $res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace ); 		 $this->reset(); 			 return $res; 		 } 
	    /**		 * update table keke_witkey_article_category		 * @return int affected_rows		 */		function update() {				if ($this->getWhere()) { 					$res =  $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere());				} elseif (isset ( self::$_data ['art_cat_id'] )) { 						self::$_data ['where'] = array ('art_cat_id' => self::$_data ['art_cat_id'] );						unset(self::$_data['art_cat_id']);						$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere() );				}				$this->reset();				return $res;		}
	    /**		 * query table: keke_witkey_article_category,if isset where return where record,else return all record		 * @return array 		 */		function query($cache_time = 0){ 			 if($this->getWhere()){ 				 $sql = "select * from $this->_tablename where ".$this->getWhere(); 			 }else{ 				 $sql = "select * from $this->_tablename"; 			 } 			 $this->reset();			 return $this->_db->cached ( $cache_time )->cache_data ( $sql );		 } 
	    /**		 * query count keke_witkey_article_category records,if iset where query by where 		 * @return int count records		 */		function count(){ 			 if($this->getWhere()){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->reset(); 			 return $this->_db->get_count ( $sql ); 		 } 
	    /**		 * delete table keke_witkey_article_category, if isset where delete by where 		 * @return int deleted affected_rows 		 */		function del(){ 			 if($this->getWhere()){ 				 $sql = "delete from $this->_tablename where ".$this->getWhere(); 			 } 			 else{ 				 $sql = "delete from $this->_tablename where art_cat_id = $this->_art_cat_id "; 			 } 			 $this->reset(); 			 return $this->_db->query ( $sql, Database::DELETE ); 		 } 
   } //end 