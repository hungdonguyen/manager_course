<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start(); //
ob_start(); //header, cookies

require_once 'config.php';

require_once './includes/connect.php';
require_once './includes/database.php';
require_once './includes/session.php';

// setSession('hungchika', 'test session   ');
// setSession('hung', 'php session test');
// $a = getSession('hungchika');
// echo $a;
// deleteSession('hungchika');
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

$module = _MODULES;
$action = _ACTION;

// $rel = getAll("SELECT * FROM course");
// echo '<pre>';
// print_r($rel);
// echo '</pre>';

// $rel2 = getOne("SELECT * FROM course WHERE id = :id", 3);
// print_r($rel2);
// die();

// $data = ['name' => 'Marketing căn bản',
// 'slug' => 'khoa-hoc-marketing-can-ban',];
// // insert('course',$data);
// // echo'success';
// // die();
// $condition = 'id = 3';
// update('course', $data, $condition);
// die();
// Accept both ?module=... and ?modules=... (some links may use the plural)
if (!empty($_GET['module'])) {
    $module = $_GET['module'];
} elseif (!empty($_GET['modules'])) {
    $module = $_GET['modules'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// Basic sanitization to avoid directory traversal or strange input
$module = preg_replace('/[^a-zA-Z0-9_]/', '', $module);
$action = preg_replace('/[^a-zA-Z0-9_]/', '', $action);

$path = './modules/' . $module . '/' . $action . '.php';

if (!empty($path)) {
    if (file_exists($path)) {
        require_once $path;
    } else {
        require_once './modules/errors/404.php';
    }
} else {
    require_once './modules/errors/500.php';
}
