<?php

  // required headers
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  // include database and object files
  include_once '../../functions.php';
  include_once '../models/brand.php';
  
  // instantiate database and product object
  $database = conn();
  
  // initialize object
  $brand = new Brand($database);

  // set ID property of record to read
  $brand->price = isset($_GET['price']) ? $_GET['price'] : die();

  // query products
  $stmt = $brand -> readPrice();
  $num = $stmt->rowCount();

  // check if more than 0 record found
  if ($num > 0) {
    // products array
    $products_arr=array();
    $products_arr["records"]=array();

    // retrieve our table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      // extract row
      // this will make $row['name'] to just $name only
      extract($row);

      $product_item=array(
          "id" => $id,
          "name" => $name,
          "brand" => $brand,
          "type" => $type,
          "summary" => $summary,
          "price" => $price,
          "status" => $status
      );

      array_push($products_arr["records"], $product_item);
  }

    // set response code - 200 OK
    http_response_code(200);

    // show products data in json format
    echo json_encode($products_arr, JSON_PRETTY_PRINT);

  } else {
  
    // set response code - 200 OK
    http_response_code(200);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No products found.")
    );
}
  