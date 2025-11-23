<?php
if ( ! defined('_HUNG') ) {
	die('Truy cập không hợp lệ');
}

//GET
function getAll($sql) {
	global $conn;
	$stm = $conn->prepare($sql);
	$stm->execute();
	
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}

function getRow($sql) {
	global $conn;
	$stm = $conn->prepare($sql);
	$stm->execute();
	$result = $stm->rowCount();
	return $result;
}

function getOne($sql,$id) {
	global $conn;
	$stm = $conn->prepare($sql);
	$stm->bindParam(':id', $id, PDO::PARAM_INT);
	$stm->execute();
	$result = $stm->fetch(PDO::FETCH_ASSOC);
	return $result;
}

function getLastId($sql) {
	global $conn;
	$stm = $conn->prepare($sql);
	$stm->execute();
	$result = $conn->lastInsertId();
	return $result;
}

function lastID() {
	global $conn;
	return $conn->lastInsertId();
}

//INSERT
function insert($table, $data) {
	global $conn;
	$keys = array_keys($data);
	$cot = implode(", ", $keys);
	$places =":". implode(",:", $keys);
	$sql = "INSERT INTO $table ($cot) VALUES ($places)";
	$stm = $conn->prepare($sql);
	$stm -> execute($data);
}

//UPDATE
function update($table, $data, $condition = '') {
	global $conn;
	$update = '';
	foreach ($data as $key => $value) {
		$update .= "$key=:$key, ";
	}
	$update = trim($update, ', ');
	if(!empty($condition)) {
		$sql = "UPDATE $table SET $update WHERE $condition";
	} else {
		$sql = "UPDATE $table SET $update";
	}
	$stm = $conn->prepare($sql);
	$stm -> execute($data);
}

//DELETE
function delete($table, $condition = '') {
	global $conn;
	if(!empty($condition)) {
		$sql = "DELETE FROM $table WHERE $condition";
	} else {
		$sql = "DELETE FROM $table";
	}
	$stm = $conn->prepare($sql);
	$stm -> execute();
}