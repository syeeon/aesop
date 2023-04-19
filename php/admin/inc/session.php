<?php
session_start();

$login_idx = isset($_SESSION["login_idx"])? $_SESSION["login_idx"] : "";
$login_name = isset($_SESSION["login_name"])? $_SESSION["login_name"] : "";
$login_id = isset($_SESSION["login_id"])? $_SESSION["login_id"] : "";
$login_pwd = isset($_SESSION["login_pwd"])? $_SESSION["login_pwd"] : "";

?>
