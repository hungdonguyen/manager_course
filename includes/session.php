<?php
if ( ! defined('_HUNG') ) {
	die('Truy cập không hợp lệ');
}

//set session
function setSession($key, $value) {
	if (!empty(session_id())) {
		$_SESSION[$key] = $value;
		return true;
	}
	return false;
}
//set session flash
function setSessionFlash($key, $value) {
	$key = $key .'Flash';

	$rel = setSession($key, $value);
	return $rel;
}
//get session
function getSession($key = '') {
	if (empty($key)) {
		return $_SESSION;
	} elseif (isset($_SESSION[$key])) {
		return $_SESSION[$key];
	} else {
		return false;
	}
}
//get session flash
function getSessionFlash($key) {
	$keyFlash = $key . 'Flash';
	$value = getSession($keyFlash);
	deleteSession($keyFlash);
	return $value;
}

//delete session
function deleteSession($key = '') {
	if (empty($key)) {
		session_destroy();
		return true;
	} elseif (isset($_SESSION[$key])) {
		unset($_SESSION[$key]);
		return true;
	}
	return false;
}
