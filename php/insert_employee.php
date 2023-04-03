<?php
session_start();
require_once("database/connection.php");
var_dump($_POST);
extract($_POST);
try
{
     $sql = "insert into employee (name,gender,email,doj) values(?,?,?,?) ";
     $statement = $db->prepare($sql);
     $statement->bindparam(1,$name);
     $statement->bindparam(2,$gender);
     $statement->bindparam(3,$email);
     $statement->bindparam(4,$doj);
     $statement->execute();
     $_SESSION['message'] = "Employee added successfully";
     header("location:crud_demo.php");
}
catch(PDOException $error)
{
     echo $error;
}
?>