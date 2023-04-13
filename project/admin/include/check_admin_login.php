<?php
session_start();
if(isset($_SESSION['id'])==false)
{
     $_SESSION['message']="Login is Requried";
     var_dump($_SESSION);
     header("location:login.php");
     exit();
}
?>