<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 *********************************************/

// Sample data
$category_id = 1;   
// Get the products
$products = get_products_by_category($category_id);

/**************************************
 * Delete a product
 **************************************/

// Sample data
$name = 'Fender Telecaster';

// Delete the product and display an appropriate messge
$delete_message = "No rows were deleted.";

/**************************************
 * Insert a product
 **************************************/

// Sample data
$category_id = 1;
$code = 'tele3';
$name = 'Fender Telecaster';
$description = 'NA';
$price = '949.99';

// Insert the data 
$product_id = add_product($category_id, $code, $name, $description, $price, 0);

// Display an appropriate message
if ($product_id > 0) {
    $insert_message = "1 row was inserted with this ID: $product_id";
} else {
    $insert_message = "No rows were inserted.";
}

include 'home.php';
?>
