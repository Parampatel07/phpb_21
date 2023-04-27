<?php
// echo "Page submitted";
session_start();
require_once("../include/connection.php");
try
{
     $_SESSION['seller_id']=1; // this will not be fix it will be get from session when login is completed 
     extract($_POST);
     $sql = "INSERT into category (title,photo,islive,saleseman_id) values (?,?,?,?)";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$title);
     var_dump($_FILES);
     $image_name =  rand(10,99) . rand(10,99) . rand(10,99) . $_FILES['image']['name'];
     echo $image_name;
     echo $image_path = "../images/category/".$image_name;
     move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
     $stat->bindparam(2,$image_name);
     $stat->bindparam(3,$status);
     $stat->bindparam(4,$_SESSION['seller_id']);
     $stat->execute();
     $_SESSION['message']="Category inserted Successfully ";
     header("location:../seller_add_category.php");
}
catch(PDOException $e)
{
     LogError($e);
}
?>