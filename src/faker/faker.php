<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Click the button below to create dummy expenses</h1>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method='post'>
    <input type="submit" name="create" value="Create data" />
  </form>

</body>
</html>

<?php /*
require_once 'autoload.php';
require_once '../app/functions.php';
require_once '../api/brands/models/brand.php';
 
$faker = Faker\Factory::create();

$database = conn();
  
$product = new Brand($db);

for ($i=0; $i <= 10; $i++)
{
	$productName = $faker->words(2,true);
	$productBrand = $faker->text(500);
	$productType =  $faker->words(2,true);
	$productSummary = $faker->text(500);
	$productPrice = $faker->numberBetween(1, 1000);
	$productStatus = $faker->numberBetween(0,2);

	
	//$sql = "INSERT INTO api_brands (name, brand, type, summary, price, status) values ('".$productName."', '".$productBrand."' , '".$productType."' , '".$productSummary."' , '".$productStatus."')";
	
	//mysqli_query($conn, $sql);
}


// create product
function create_brand($name, $type, ....){
  
  // query to insert record
  $query = "INSERT INTO
              " . $product->table_name . "
          SET
              name=:name, price=:price, description=:description, category_id=:category_id, created=:created";

  // prepare query
  $stmt = $product->conn->prepare($query);

  // sanitize
  $product->name=htmlspecialchars(strip_tags($this->name));
  $product->price=htmlspecialchars(strip_tags($this->price));
  $this->description=htmlspecialchars(strip_tags($this->description));
  $this->category_id=htmlspecialchars(strip_tags($this->category_id));
  $this->created=htmlspecialchars(strip_tags($this->created));

  // bind values
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":price", $price);
  $stmt->bindParam(":description", $this->description);
  $stmt->bindParam(":category_id", $this->category_id);
  $stmt->bindParam(":created", $this->created);

  // execute query
  if($stmt->execute()){
      return true;
  }

  return false;
    
}
 */
?>