<?php
require_once("connection.php");

try
{
          
     $name="hardik";
     $age=19;
     $gender =1;
     $course = "php";
     $doj = "2022-12-31"; 
     $sql = "Insert into students (name,age,gender,course,doj) Values (?,?,?,?,?)";
     $statement = $db->prepare($sql);
     $statement->bindparam(1,$name);
     $statement->bindparam(2,$age);
     $statement->bindparam(3,$gender);
     $statement->bindparam(4,$course);
     $statement->bindparam(5,$doj);
     $statement->execute();
     echo "Data added successfully ";
}
catch(PDOException $error)
{
     echo $error;
}
?>