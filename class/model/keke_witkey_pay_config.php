<?php

defined ( 'IN_KEKE' ) or die ( 'Access Denied' );
class Keke_witkey_pay_config extends Model {
	protected static $_data = array ();
	function __construct() {
		parent::__construct ( 'witkey_pay_config' );
	}
	public function getK() {
		return self::$_data ['k'];
	}
	public function getV() {
		return self::$_data ['v'];
	}
	public function getWhere() {
		return self::$_where;
	}
	public function setK($value) {
		self::$_data ['k'] = $value;
		return $this;
	}
	public function setV($value) {
		self::$_data ['v'] = $value;
		return $this;
	}
	public function setWhere($value) {
		self::$_where = $value;
		return $this;
	}
	public function setData($array) {
		self::$_data = array_filter ( $array, array (
				'Model',
				'remove_null' 
		) );
		return $this;
	}
	/**
	 * insert into keke_witkey_pay_config ,or add new record
	 * 
	 * @return int last_insert_id
	 */
	function create($return_last_id = 1) {
		$res = $this->_db->insert ( $this->_tablename, self::$_data, $return_last_id, $this->_replace );
		$this->reset ();
		return $res;
	}
	/**
	 * update table keke_witkey_pay_config
	 * 
	 * @return int affected_rows
	 */
	function update() {
		if ($this->getWhere ()) {
			$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere () );
		} elseif (isset ( self::$_data ['k'] )) {
			self::$_where = array (
					'k' => self::$_data ['k'] 
			);
			unset ( self::$_data ['k'] );
			$res = $this->_db->update ( $this->_tablename, self::$_data, $this->getWhere () );
		}
		$this->reset ();
		return $res;
	}
	/**
	 * query table: keke_witkey_pay_config,if isset where return where
	 * record,else return all record
	 * 
	 * @return array
	 */
	function query($fields = '*', $cache_time = 0) {
		empty ( $fields ) and $fields = '*';
		if ($this->getWhere ()) {
			$sql = "select $fields from $this->_tablename where " . $this->getWhere ();
		} else {
			$sql = "select $fields from $this->_tablename";
		}
		empty ( $fields ) and $fields = '*';
		$this->reset ();
		return $this->_db->cached ( $cache_time )->cache_data ( $sql );
	}
	/**
	 * query count keke_witkey_pay_config records,if iset where query by where
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
	 * delete table keke_witkey_pay_config, if isset where delete by where
	 * 
	 * @return int deleted affected_rows
	 */
	function del() {
		if ($this->getWhere ()) {
			$sql = "delete from $this->_tablename where " . $this->getWhere ();
		} else {
			$sql = "delete from $this->_tablename where k = $this->_k ";
		}
		$this->reset ();
		return $this->_db->query ( $sql, Database::DELETE );
	}
} //end 