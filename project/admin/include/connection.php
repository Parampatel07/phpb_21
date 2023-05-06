<?php
date_default_timezone_set("asia/kolkata");
define("FILENAME",$_SERVER['DOCUMENT_ROOT']."/phpb_21/project/admin/include/error.log");
define("ISDEBUG",true);
define("SERVER","localhost:3306");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","etrade");
//used to store errors in error.log file of project/inc directory and also display error on screen if project is in developement stage 
function LogError(PDOException $error,$FileName='connection.php',$line=0) //user defined functions
{
    $ErrorDateTime=date("Dd-m-Yh:i:sA");
    $ErrorMessage="\n Error Code". $error->getCode() . " ErrorDetail " . $error->errorInfo[2].
    " on occured at $ErrorDateTime in file $FileName at lineno $line";
    //it writes content into file
    file_put_contents(FILENAME,$ErrorMessage,FILE_APPEND|LOCK_EX);
    if(ISDEBUG==true)
        $_SESSION['error'] =  $ErrorMessage;
    else
       $ErrorMessage = "Oops, Something went wrong. Please contact adminstrator";
       $_SESSION['error'] = $ErrorMessage;
    // exit();//terminate php script
}
$db=null; //object
try
{
    $db=new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE , USERNAME , PASSWORD );
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error){
    LogError($error);//calling user defined functions
}
//RunQuery method to execute insert update delete sql queries (any quries except select)
function RunQuery($sql,$data=null)
{
    try 
    {
        $statement = $GLOBALS['db']->prepare($sql);
        if($data==null)
            $statement->execute();
        else 
            $statement->execute($data);
        return true;
    }
    catch(PDOException$error){
        LogError($error);//callinguserdefinedfunctions
    }
    return false;
}
//FetchRow() will execute select query only 
function FetchRow($sql,$data=null)
{
    try 
    {
        $statement = $GLOBALS['db']->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        if($data==null)
            $statement->execute();
        else 
            $statement->execute($data);
        $row = $statement->fetchAll();
        return $row;
    }
    catch(PDOException$error){
        LogError($error);//callinguserdefinedfunctions
    }
}

?>