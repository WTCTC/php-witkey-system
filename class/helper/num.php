<?php defined ( 'IN_KEKE' ) or die ( 'Access Dinied' );
/**
 * 数据处理
 * @author Michael
 * @version 2.2 2012-11-22
 *
 */
class Num {
	/**
	 * @var 单位的长度
	 */
	public static $_byte_units= array(
			'B'   => 0,
			'K'   => 10,
			'KB'  => 10,
			'M'   => 20,
			'MB'  => 20,
			'G'   => 30,
			'GB'  => 30,
			'T'   => 40,
			'TB'  => 40,
			'P'   => 50,
			'PB'  => 50,
			'E'   => 60,
			'EB'  => 60,
			'Z'   => 70,
			'ZB'  => 70,
			'Y'   => 80,
			'YB'  => 80,
 	);
	/**
	 * 本地化数字处理
	 * @param float $number 数字
	 * @param int $places  小数位
	 * @param bool $monetary 是否为货币
	 * @return string
	 */
	public static function format($number,$places,$monetary=FALSE){
		$info = localeconv();
		
		if ($monetary){
			$decimal   = $info['mon_decimal_point'];
			$thousands = $info['mon_thousands_sep'];
		}else{
			$decimal   = $info['decimal_point'];
			$thousands = $info['thousands_sep'];
		}
		
		return number_format($number, $places, $decimal, $thousands);
	}
	/**
	 * 格式化字节大小
	 * @param int $size
	 * @throws Keke_exception
	 * @return number
	 */
	public static function bytes($size){
		// 去掉空格
		$size = trim( (string) $size);
	
		// 重构单位为字符串 for the regex
		$accepted = implode('|', array_keys(Num::$_byte_units));
	
		// 构造正则表达式
		$pattern = '/^([0-9]+(?:\.[0-9]+)?)('.$accepted.')?$/Di';
	
		// 验证内容 
		if ( ! preg_match($pattern, $size, $matches))
			throw new Keke_exception('The byte unit size, ":size", is improperly formatted.', array(
					':size' => $size,
			));
	
		// 找出匹配的值
		$size = (float) $matches[1];
	
		// 返回对应的单位
		$unit = Arr::get($matches, 2, 'B');
	
		// 转换
		$bytes = $size * pow(2, Num::$_byte_units[$unit]);
	
		return $bytes;
	}
	
	
	
}
