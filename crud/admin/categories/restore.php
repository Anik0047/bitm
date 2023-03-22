<pre>
    <?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

    use Seip\Categories;

    $_categorys = new Categories();
    $categorys = $_categorys->restore();

    ?>
</pre>