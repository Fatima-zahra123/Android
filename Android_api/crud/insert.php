<?php
error_reporting(1);
include("db_config.php");
// array for JSON response
$response = array();
if( !(empty($_POST['name'])))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $result = mysql_query("INSERT INTO info(id,name, address) VALUES(null,'$name','$address')");
    if($result>0){
           $response["success"] = 1;
         }    
     else{
           $response["success"] = 0;
         }
     // echoing JSON response
     echo json_encode($response);
}
?>