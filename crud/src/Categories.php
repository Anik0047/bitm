<?php

namespace Seip;

use PDO;

class Categories
{

    public $_categoryName = null;
    public $_link = null;

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
        

        // get query
        $query = "SELECT * FROM `categories` WHERE is_deleted = 0";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $categorys = $stmt->fetchAll();

        return $categorys;
    }

    public function store()
    {
        $_categoryName = $_POST['name'];
        $_link = $_POST['link'];
        $_created_at = date('Y-m-d H:i:s', time());


        //  this->connection to database

        

        // // insert query 
        $query = "INSERT INTO  `categories` (`category-name`, `link`, `created_at`) VALUES (:categoryName, :link, :created_at);";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':categoryName', $_categoryName);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':created_at', $_created_at);

        $result = $stmt->execute();

        header("location:index.php");

        return $result;
    }

    public function show()
    {
        $_id = $_GET['id'];
        // $_id=1;
        //  this->connection to database

        

        // get query
        $query = "SELECT * FROM `categories` where id = :id ";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $category = $stmt->fetch();

        return $category;
    }

    public function edit()
    {
        $_id = $_GET['id'];

        // database this->connection 
        

        // get query
        $query = "SELECT * FROM `categories` where id = :id ";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $category = $stmt->fetch();

        return $category;
    }

    public function update()
    {
        $_id = $_POST['id'];
        $_categoryName = $_POST['name'];
        $_link = $_POST['link'];
        $_modified_at = date('Y-m-d H:i:s', time());

        // database this->connection 
        

        $query = "UPDATE `categories` SET `category-name` = :categoryName, `link` = :link, `modified_at` = :modified_at WHERE `categories`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':categoryName', $_categoryName);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':modified_at', $_modified_at);

        $result = $stmt->execute();

        $category = $stmt->fetch();

        // var_dump($category);

        header("location: index.php");

        return $category;
    }

    public function trash()
    {
        $_id = $_GET['id'];
        $_is_deleted = 1;
        //  this->connection to database

        

        // get query
        $query = "UPDATE `categories` SET `is_deleted` = :is_deleted WHERE `categories`.`id` = :id";


        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':is_deleted', $_is_deleted);

        $result = $stmt->execute();

        var_dump($result);

        header("location: index.php");

        return $result;
    }

    public function trash_index()
    {
        

        // get query
        $query = "SELECT * FROM `categories` WHERE is_deleted = 1";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $categorys = $stmt->fetchAll();

        return $categorys;
    }

    public function restore()
    {
        $_id = $_GET['id'];
        $_is_deleted = 0;
        //  this->connection to database

        

        // get query
        $query = "UPDATE `categories` SET `is_deleted` = :is_deleted WHERE `categories`.`id` = :id";


        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':is_deleted', $_is_deleted);

        $result = $stmt->execute();

        // var_dump($result);

        header("location: index.php");

        return $result;
    }

    public function delete()
    {
        $_id = $_GET['id'];
        //  this->connection to database

        

        // get query
        $query = "DELETE FROM categories WHERE `categories`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        // var_dump($result);

        header("location: index.php");

        return $result;
    }
}
