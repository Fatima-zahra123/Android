<?php
  error_reporting(1);
  include("db_config.php");
  // array for JSON response
  $response = array();
if( isset($_POST['id'] ) && isset($_POST['name']) && isset($_POST['address']) ) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $result = mysql_query("update info set name='".$name."', address='".$address."' where id='".$id."' ") or die(mysql_error());
    $row_count = mysql_affected_rows();
    if($row_count>0){
         $response["success"] = 1;
         $response["message"] = "Updated Sucessfully.";
     }
    else{
        $response["success"] = 0;
        $response["message"] = "Failed To Update.";  
     }  
  // echoing JSON response
}  
else{
        $response["success"] = 0;
        $response["message"] = "Failed To Update1."; 
}  
echo json_encode($response);

?>