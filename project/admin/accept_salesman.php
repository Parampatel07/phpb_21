<?php
session_start();
require_once("include/connection.php");
try
{
     $sql = "Update salesman set isdeleted=1 where id=?";
     $stat=$db->prepare($sql);
     $stat->bindparam(1,$_REQUEST['id']);
     $stat->execute();
     $_SESSION['message']="Salesman added successfully ";
     header("location:add_saler.php");
}
catch(PDOException $error)
{
     LogError($error);
     header("location:add_saler.php");
}
?>