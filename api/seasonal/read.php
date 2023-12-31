<?php
// required header
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/seasonal.php';
  
// instantiate database and seasonal object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$seasonal = new Seasonal($db);
  
// query categorys
$stmt = $seasonal->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $seasonal_arr=array();
    $seasonal_arr["records"] = array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $seasonal_item=array(
            "seasonal_id" => $seasonal_id,
            "seasonal_name" => $seasonal_name,
            "seasonal_desc" => html_entity_decode($seasonal_desc)
        );
  
        array_push($seasonal_arr["records"], $seasonal_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show categories data in json format
    echo json_encode($seasonal_arr);
}
  
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no categories found
    echo json_encode(
        array("message" => "No seasonal product found.")
    );
}
?>