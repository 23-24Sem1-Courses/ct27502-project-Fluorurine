<?php
require "vendor/autoload.php";

use Model\Database;
use Model\ProductModel;
use Model\ReceiptModel;

$test = new ProductModel();
// print_r($test->create("ProductH2ell22o2", "test", "CAT5", "15.00", "test"));
// print_r($test->count2()[0]["count"]);
$test2 = new ReceiptModel();
print_r($test2->maxId()[0]["max"]);

$fruits = array(
	"apple" => "red",
	"orange" => "orange",
	"banana" => "yellow"
);

$aa = [1, 2, 3, 7, 10];

// foreach ($fruits as $key => $value) {
// 	$aa[] = $key;
// }
print_r($test2->getPrice($aa));
// print_r(implode("', '", $aa));
// print_r($test->get_price($aa));
	// / print_r(array_keys($fruits));
