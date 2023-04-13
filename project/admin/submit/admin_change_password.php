<?php
require_once("../include/check_admin_login.php");
require_once("../include/connection.php");
try
{
     $page="../change_password.php";
     extract($_POST);
     if($newpassword==$confirmpassword)
     {
          echo "Both password are same ";
          $sql = "Select password from admin where id = ? ";
          $stat=$db->prepare($sql);
          $stat->bindparam(1,$_SESSION['id']);
          $stat->setFetchMode(PDO::FETCH_ASSOC);
          $stat->execute();
          $row=$stat->fetch();
          if(password_verify($oldpassword,$row['password'])==true)
          {    
               $new_hased_password = password_hash($newpassword,PASSWORD_BCRYPT);
               echo "Password is correct ";
               $sql = "update admin set password = ? where id = ?";
               $stat=$db->prepare($sql);
               $stat->bindparam(1,$new_hased_password);
               $stat->bindparam(2,$_SESSION['id']);
               $stat->execute();
               $_SESSION['message']="Password Updated Successfully";
               $page = "../login.php";
          }
          else
          {
               $_SESSION['message']= "Password is wrong ";
          }
     }
     else
     {
          $_SESSION['message']= "Both password are not same ";
     }
     header("location:$page");
}
catch(PDOException $e)
{
     LogError($e);
}
?>