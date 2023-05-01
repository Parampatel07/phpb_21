<?php
session_start();
require_once("../include/connection.php");
try
{
     $sql = "delete from category where id = ?";
     $stat=$db->prepare($sql);
     $stat->bindparam(1,$_REQUEST['category_id']);
     $stat->execute();
     echo 1;
}
catch(PDOException $error)
{
     LogError($error);
}
?>