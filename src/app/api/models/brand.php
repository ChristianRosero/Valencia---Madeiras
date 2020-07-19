<?php

  class Brand{
    private $conn;
    private $table_name = "api_brands";

    //object properties
    public $id; 
    public $name;
    public $brand;
    public $type;
    public $summary;
    public $price;
    public $status;

    public function __construct($db) {
      $this->conn = $db;
    }

    // read products
    function read(){
      
      // select all query
      $query = "SELECT * FROM
                  " . $this->table_name . " ORDER BY id ASC";

      // prepare query statement
      $stmt = $this->conn->prepare($query);

      // execute query
      $stmt->execute();

      return $stmt;
    }

    // used when filling up the update product form
    function readPrice() {
  
      // query to read single record
      $query = "SELECT * FROM
                  " . $this->table_name . " 
              WHERE
                  price = ?
              ORDER BY id ASC";

      // prepare query statement
      $stmt = $this->conn->prepare( $query );

      // bind price of product to be updated
      $stmt->bindParam(1, $this->price);

      // execute query
      $stmt->execute();

      return $stmt;
    }
  
  }