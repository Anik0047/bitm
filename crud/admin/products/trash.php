<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Products;

$_products = new Products();
$product = $_products->trash();

?>