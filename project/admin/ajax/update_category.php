<?php
session_start();
require_once("../include/connection.php");
// echo "success";
// print_r($_POST);
try
{
     $sql = "UPDATE category set title=? , islive = ? where id = ?";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$_POST['title']);
     $stat->bindparam(2,$_POST['status']);
     $stat->bindparam(3,$_POST['id']);
     $stat->execute();
     echo 1;
}
catch(PDOException $error)
{
     LogError($error);
}
?>