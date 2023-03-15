<?php

$approot = $_SERVER['DOCUMENT_ROOT'] . '/php/crud/';

include_once($approot . 'vendor/autoload.php');

use Seip\Products;

$_products = new Products();
$products = $_products->restore();

?>