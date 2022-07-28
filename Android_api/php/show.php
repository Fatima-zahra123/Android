<?php
 error_reporting(0);
 include("db_config.php");
// array for JSON response
$response = array();
if( isset($_GET['id'] ) ) {
    $id=$_GET['id'];
    $result = mysql_query("select * from info where id='$id' ");
    if (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        $item = array();
            $item["id"] = $row["id"];
            $item["name"] = $row["name"];
            $item["address"] = $row["address"];
            $response["order"] = $item;
            // success
         $response["success"] = 1;
    }
    else {
        // order is empty 
          $response["success"] = 0;
          $response["message"] = "No Items Found";
    }
    // echoing JSON response
    echo json_encode($response);
}
?>