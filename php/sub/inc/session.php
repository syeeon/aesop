<?php
session_start();

$login_idx = isset($_SESSION["login_idx"])? $_SESSION["login_idx"] : "";
// echo $login_idx;
//exit;
$login_name = isset($_SESSION["login_name"])? $_SESSION["login_name"] : "";
$login_id = isset($_SESSION["login_id"])? $_SESSION["login_id"] : "";
$login_pwd = isset($_SESSION["login_pwd"])? $_SESSION["login_pwd"] : "";
// echo $login_name;
// echo $login_id;
// echo $login_pwd;
// exit;
?>
