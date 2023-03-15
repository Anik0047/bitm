<pre>
<?php
$approot = $_SERVER['DOCUMENT_ROOT'] . '/php/crud/';

include_once($approot . 'vendor/autoload.php');

use Seip\Categories;

$_categorys = new Categories();
$categorys = $_categorys->update();
?>
</pre>