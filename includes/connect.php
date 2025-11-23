<?php
if ( ! defined('_HUNG') ) {
	die('Truy cập không hợp lệ');
}
try {
	if (class_exists('PDO')){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // hỗ trợ về Tiếng Việt
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Đẩy lỗi vào ngoại lệ
		);
		$dsn = _DRIVER . ':host=' . _HOST;
		if (defined('_PORT')) {
			$dsn .= ';port=' . _PORT;
		}
		$dsn .= ';dbname=' . _DB;
		
		$conn = new PDO($dsn, _USER, _PASS, $options);
	} else {
		throw new Exception('PDO class không tồn tại. Vui lòng cài đặt PHP PDO extension.');
	}

} catch (Exception $ex) {
	if (defined('_DEBUG') && _DEBUG) {
		echo '<h3>Lỗi kết nối Database:</h3>';
		echo '<p>' . $ex->getMessage() . '</p>';
		echo '<pre>' . $ex->getTraceAsString() . '</pre>';
		die();
	} else {
		require_once './modules/errors/404.php';
		die();
	}
}


