<?php
require "vendor/autoload.php";

use Model\Database;
use Model\ProductModel;

$test = new ProductModel();
// print_r($test->create("ProductH2ell22o2", "test", "CAT5", "15.00", "test"));
print_r($test->count2()[0]["count"]);
