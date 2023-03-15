<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Banners;

$_banners = new Banners();
$banners = $_banners->delete();

// var_dump($result);



?>