<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

use Seip\Users;

$_users = new Users();
$users = $_users->trash();
?>