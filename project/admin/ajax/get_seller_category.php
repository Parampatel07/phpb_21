<?php
session_start();
require_once("../include/connection.php");
try
{
     $_SESSION['seller_id']= 1; //this is come from login page
     $sql = "Select * from category where saleseman_id = ? ";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$_SESSION['seller_id']);
     $stat->setFetchMode(PDO::FETCH_ASSOC);
     $stat->execute();
     $table = $stat->fetchAll();
     // var_dump($table);
     // echo "my name is param";
     $table = json_encode($table);
     echo $table;
}
catch(PDOException $error)
{
     LogError($error);
}
?>