<?php
require_once("include/check_admin_login.php");
unset($_SESSION['id']);
$_SESSION['message']="Logout successfully ";
header("location:login.php");
?>