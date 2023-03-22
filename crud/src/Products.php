<?php

namespace Seip;

use PDO;

class Products
{

    public $_title = null;
    public $_short_description = null;
    public $_description = null;
    public $product = null;
    public $_picture = null;


    public $conn = null;


    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=project_9", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function index()
    {
        

        $query = "SELECT * FROM `products` WHERE is_deleted = 0";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $products = $stmt->fetchALL();

        return $products;
    }

    public function store()
    {
        $approot = $_SERVER['DOCUMENT_ROOT'] . "/PHP/crud/";

        $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        $destination = $approot . "uploads/" . $file_name;
        $is_file_moved = move_uploaded_file($target, $destination);

        if ($is_file_moved) {
            $_picture = $file_name;
        } else {
            $_picture = null;
        }


        if (array_key_exists('is_active', $_POST)) {
            $_is_active = $_POST['is_active'];
        } else {
            $_is_active = 0;
        }


        $_created_at = date('Y-m-d H:i:s', time());


        $_title =  $_POST['title'];
        $_short_description = $_POST['short_description'];
        $_description = $_POST['description'];
        $_product_type = $_POST['product_type'];


        


        // $query ="INSERT INTO `product` (`title`) VALUES (:title)";
        $query = "INSERT INTO `products` (`title`, `shortDescription`, `description`, `productType`, `picture`, `is_active`, `created_at`) VALUES (:title,   :shortDescription, :productDescription, :productType, :picture,  :is_active, :created_at);";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":title", $_title);
        $stmt->bindParam(":shortDescription", $_short_description);
        $stmt->bindParam(":productDescription", $_description);
        $stmt->bindParam(":productType", $_product_type);
        $stmt->bindParam(":picture", $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':created_at', $_created_at);

        $result = $stmt->execute();

        var_dump($result);

        header("location:index.php");


        return $result;
    }

    public function show()
    {


        $_id = $_GET['id'];

        

        $query = "SELECT * FROM `products` Where id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $product = $stmt->fetch();


        return $product;
    }

    public function edit()
    {
        $_id = $_GET['id'];

        

        $query = "SELECT * FROM `products` Where id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $product = $stmt->fetch();

        return $product;
    }

    public function update()
    {
        print_r($_POST);
        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_short_description = $_POST['shortDescription'];
        $_description = $_POST['description'];
        $_product_type = $_POST['productType'];

        // echo $_title;
        $approot = $_SERVER['DOCUMENT_ROOT'] . "/PHP/crud/";

        if (($_FILES['picture']['name']) !== "") {
            $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];

            $_target = $_FILES['picture']['tmp_name'];
            $destination = $approot . "uploads/" . $file_name;
            $is_file_moved = move_uploaded_file($_target, $destination);

            if ($is_file_moved) {
                $_picture = $file_name;
            } else {
                $_picture = null;
            }
        } else {
            $_picture = $_POST['old_picture'];
        }



        if (array_key_exists('is_active', $_POST)) {
            $_is_active = $_POST['is_active'];
        } else {
            $_is_active = 0;
        }


        $_modified_at = date('Y-m-d H:i:s', time());


       

        // Insert query
        $query = "UPDATE `products` SET `title` = :title, `shortDescription` = :shortDescription, `description` = :productDescription, `productType` = :productType, `picture` = :picture,  `is_active` = :is_active, `modified_at` = :modified_at  WHERE `products`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':shortDescription', $_short_description);
        $stmt->bindParam(':productDescription', $_description);
        $stmt->bindParam(':productType', $_product_type);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':modified_at', $_modified_at);

        $result = $stmt->execute();

        var_dump($result);

        header("location:index.php");
        return $result;
    }

    public function trash()
    {
        $_id = $_GET['id'];
        $_is_deleted = 1;

        


        $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':is_deleted', $_is_deleted);

        $result = $stmt->execute();

        // var_dump($result);

        header("location:index.php");

        return $result;
    }

    public function trash_index()
    {
        

        $query = "SELECT * FROM `products` WHERE is_deleted = 1";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $products = $stmt->fetchALL();

        return $products;
    }

    public function restore()
    {
        $_id = $_GET['id'];
        $_is_deleted = 0;

        


        $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':is_deleted', $_is_deleted);

        $result = $stmt->execute();

        // var_dump($result);

        header("location:index.php");

        return $result;
    }

    public function delete()
    {
        $_id = $_GET['id'];

        


        $query = "DELETE FROM products WHERE `products`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        // var_dump($result);

        header("location:index.php");

        return $result;
    }
}
