<?php 

namespace connect;

class Conn {
	private static $instance;
	public static function getConn () {
		
		if (!isset(self::$instance)) {
			self::$instance = new \PDO(
				'mysql:host=localhost;
				dbname=db_loja;
				charset=utf8',
				'luiz', '1902'

			);
		}
		return self::$instance;

	}
}
?>
