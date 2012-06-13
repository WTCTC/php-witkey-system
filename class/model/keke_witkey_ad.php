<?php
class keke_witkey_ad extends Model {
	protected static $_data = array ();
	function __construct() {
		parent::__construct ( 'witkey_ad' );
	}
	
	public function getAd_id() {
		return self::$_data ['ad_id'];
	}
	public function getTarget_id() {
		return self::$_data ['target_id'];
	}
	public function getAd_type() {
		return self::$_data ['ad_type'];
	}
	public function getAd_position() {
		return self::$_data ['ad_position'];
	}
	public function getAd_name() {
		return self::$_data ['ad_name'];
	}
	public function getAd_file() {
		return self::$_data ['ad_file'];
	}
	public function getAd_content() {
		return self::$_data ['ad_content'];
	}
	public function getAd_url() {
		return self::$_data ['ad_url'];
	}
	public function getStart_time() {
		return self::$_data ['start_time'];
	}
	public function getEnd_time() {
		return self::$_data ['end_time'];
	}
	public function getUid() {
		return self::$_data ['uid'];
	}
	public function getUsername() {
		return self::$_data ['username'];
	}
	public function getListorder() {
		return self::$_data ['listorder'];
	}
	public function getWidth() {
		return self::$_data ['width'];
	}
	public function getHeight() {
		return self::$_data ['height'];
	}
	public function getTpl_type() {
		return self::$_data ['tpl_type'];
	}
	public function getIs_allow() {
		return self::$_data ['is_allow'];
	}
	public function getOn_time() {
		return self::$_data ['on_time'];
	}
	public function getWhere() {
		return self::$_data ['where'];
	}
	
	public function setAd_id($value) {
		self::$_data ['ad_id'] = $value;
		return $this;
	}
	public function setTarget_id($value) {
		self::$_data ['target_id'] = $value;
		return $this;
	}
	public function setAd_type($value) {
		self::$_data ['ad_type'] = $value;
		return $this;
	}
	public function setAd_position($value) {
		self::$_data ['ad_position'] = $value;
		return $this;
	}
	public function setAd_name($value) {
		self::$_data ['ad_name'] = $value;
		return $this;
	}
	public function setAd_file($value) {
		self::$_data ['ad_file'] = $value;
		return $this;
	}
	public function setAd_content($value) {
		self::$_data ['ad_content'] = $value;
		return $this;
	}
	public function setAd_url($value) {
		self::$_data ['ad_url'] = $value;
		return $this;
	}
	public function setStart_time($value) {
		self::$_data ['start_time'] = $value;
		return $this;
	}
	public function setEnd_time($value) {
		self::$_data ['end_time'] = $value;
		return $this;
	}
	public function setUid($value) {
		self::$_data ['uid'] = $value;
		return $this;
	}
	public function setUsername($value) {
		self::$_data ['username'] = $value;
		return $this;
	}
	public function setListorder($value) {
		self::$_data ['listorder'] = $value;
		return $this;
	}
	public function setWidth($value) {
		self::$_data ['width'] = $value;
		return $this;
	}
	public function setHeight($value) {
		self::$_data ['height'] = $value;
		return $this;
	}
	public function setTpl_type($value) {
		self::$_data ['tpl_type'] = $value;
		return $this;
	}
	public function setIs_allow($value) {
		self::$_data ['is_allow'] = $value;
		return $this;
	}
	public function setOn_time($value) {
		self::$_data ['on_time'] = $value;
		return $this;
	}
	public function setWhere($value) {
		self::$_data ['where'] = $value;
		return $this;
	}
	public function setData($array){
		self::$_data = $array;
		return $this;
	}
	
	/**
	 * insert into keke_witkey_ad ,or add new record
	 * 
	 * @return int last_insert_id
	 */
	function create($return_last_id = 1) {
		$res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace );
		$this->reset ();
		return $res;
	}
	
	/**
	 * update table keke_witkey_ad
	 * 
	 * @return int affected_rows
	 */
	function update() {
		if ($this->getWhere ()) {
			$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere () );
		} elseif (isset ( self::$_data ['ad_id'] )) {
			self::$_data ['where'] = array (
					'ad_id' => self::$_data ['ad_id'] 
			);
			unset ( self::$_data ['ad_id'] );
			$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere () );
		}
		$this->reset ();
		return $res;
	}
	/**
	 * query table: keke_witkey_ad,if isset where return where record,else
	 * return all record
	 * 
	 * @return array
	 */
	function query($cache_time = 0) {
		if ($this->getWhere ()) {
			$sql = "select * from $this->_tablename where " . $this->getWhere ();
		} else {
			$sql = "select * from $this->_tablename";
		}
		$this->reset ();
		return $this->_db->cached ( $cache_time )->cache_data ( $sql );
	}
	
	/**
	 * query count keke_witkey_ad records,if iset where query by where
	 * 
	 * @return int count records
	 */
	function count() {
		if ($this->getWhere ()) {
			$sql = "select count(*) as count from $this->_tablename where " . $this->getWhere ();
		} else {
			$sql = "select count(*) as count from $this->_tablename";
		}
		$this->reset ();
		return $this->_db->get_count ( $sql );
	}
	
	/**
	 * delete table keke_witkey_ad, if isset where delete by where
	 * 
	 * @return int deleted affected_rows
	 */
	function del() {
		if ($this->getWhere ()) {
			$sql = "delete from $this->_tablename where " . $this->getWhere ();
		} else {
			$sql = "delete from $this->_tablename where ad_id = $this->_ad_id ";
		}
		$this->reset ();
		return $this->_db->query ( $sql, Database::DELETE );
	}

} //end 