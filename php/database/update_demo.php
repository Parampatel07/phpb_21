<?php
require_once("connection.php");

try
{
     $id = 6 ;
     $name = "dhaivat";
     $age=20;
     $course ="laravel";
     $gender = 1;
     $doj = "2002-10-04";
     $sql = "update students set name=?,age=?,gender=?,doj=?,course=? where id = ? ";
     $statement = $db->prepare($sql);
     $statement -> bindparam(1,$name);
     $statement -> bindparam(2,$age);
     $statement -> bindparam(3,$gender);
     $statement -> bindparam(4,$doj);
     $statement -> bindparam(5,$course);
     $statement -> bindparam(6,$id);
     $statement->execute();
     echo "Record updated successfully";
}
catch(PDOException $error)
{
     echo $error;
}
?>