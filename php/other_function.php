<?php
define("NAME","Param patel");
echo "my name is ";
echo NAME;
echo "<br>";
$temp = "ABC";
if(empty($temp)==true)
{
     echo "it is empty ";
}
else
     echo "it is not empty ";
echo "<br>";
if(is_numeric($temp))
{
     echo "temp is numeric ";
}
else
     echo"temp is not numeric ";

echo "<br>";
echo "this is php self ".$_SERVER['PHP_SELF'];
echo "<br>";
echo "this is Server name ".$_SERVER['SERVER_NAME'];
echo "<br>";
echo "this is SERVER_SOFTWARE ".$_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "this is REQUEST_METHOD ".$_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "this is REQUEST_TIME ".$_SERVER['REQUEST_TIME'];
echo "<br>";
echo "this is QUERY_STRING ".$_SERVER['QUERY_STRING'];
echo "<br>";
echo "this is DOCUMENT_ROOT ".$_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "this is HTTP_USER_AGENT ".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "this is REMOTE_ADDR ".$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "this is SCRIPT_FILENAME ".$_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo "this is SCRIPT_NAME ".$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "this is REQUEST_URI ".$_SERVER['REQUEST_URI'];
?>