<?php
require_once("connection.php");
$id=3;
try
{
     $sql = "delete from students where id = ? ";
     $statement =$db->prepare($sql);
     $statement->bindparam(1,$id);
     $statement->execute();
     echo "Delete Successfully ";
}
catch(PDOException $error )
{
     echo "error ";
}
?>