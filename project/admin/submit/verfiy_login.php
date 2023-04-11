<?php
session_start();
require_once("../include/connection.php");
try
{    $page = "../login.php";
     var_dump($_POST);
     extract($_POST);
     $sql = "Select * from admin where email = ? ";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$email);
     $stat->setFetchMode(PDO::FETCH_ASSOC);
     $stat->execute();
     $row = $stat->fetch();
     var_dump($row);
     if(empty($row)==true)
     {
          $_SESSION['message']="Invalid login attempt";
     }
     else
     {
          if(password_verify($password,$row['password'])==true)
          {
               $_SESSION['message']="Login Successfully";
               $_SESSION['id']=$row['id'];
               $page="../add_saler.php";
          }
          else
          {
               $_SESSION['message']="Invalid login attempt";
          }
     }
     header("location:$page");
}
catch(PDOException $error)
{
     LogError($error);
     header("location:../login.php");
}
