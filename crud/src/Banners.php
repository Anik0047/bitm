<?php

namespace Seip;

use PDO;

class Banners
{
    public $_title = null;
    public $_link = null;
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

    public function getActiveBanners()
    {
        $_startForm = 0;
        $_total = 2;

        $query = "SELECT * FROM `banners` WHERE is_active = 1 LIMIT $_startForm, $_total";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $banners = $stmt->fetchALL();

        return $banners;
    }

    public function index()
    {


        $query = "SELECT * FROM `banners` WHERE is_deleted = 0";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $banners = $stmt->fetchALL();

        return $banners;
    }

    public function store()
    {

        // var_dump($_FILES);\

        $approot = $_SERVER['DOCUMENT_ROOT'] ."/php/crud/";
        // change korte hbe destination tah
        $_title = $_POST['title'];
        $_link = $_POST['link'];

        // is_active kaj shuru
        if (array_key_exists('is_active', $_POST)) {
            $_is_active = $_POST['is_active'];
        } else {
            $_is_active = 0;
        }
        // shesh ekhane

        // picture jnno eta
        $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];
        $_target = $_FILES['picture']['tmp_name'];
        $destination = $approot . "uploads/" . $file_name;
        $is_file_moved = move_uploaded_file($_target, $destination);

        if ($is_file_moved) {
            $_picture = $file_name;
        } else {
            $_picture = null;
        }
        // picture er kaj shesh ekhane.

        

        $_created_at = date('Y-m-d H:i:s', time());
        // echo $_title;


        // Insert query
        $query = "INSERT INTO `banners` (`title`,`link`,`picture`, `is_active`, `created_at`) VALUES (:title, :link, :picture, :is_active, :created_at);";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':created_at', $_created_at);

        $result = $stmt->execute();


        header("location:index.php");

        return $result;
    }

    public function show()
    {
        $_id = $_GET['id'];

        

        $query = "SELECT * FROM `banners` Where id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $banner = $stmt->fetch();

        return $banner;
    }

    public function edit()
    {
        $_id = $_GET['id'];

        

        $query = "SELECT * FROM `banners` Where id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $banner = $stmt->fetch();

        return $banner;
    }

    public function update()
    {
        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_link = $_POST['link'];

        $approot = $_SERVER['DOCUMENT_ROOT'] . "/php/crud/";


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

        // coz checkbox e check na krle oi field tai post e add hoi na 


        $_modified_at = date('Y-m-d H:i:s', time());
        // echo $_title;

        

        // Insert query
        $query = "UPDATE `banners` SET `title` = :title, `link` = :link, `picture` = :picture, `is_active` = :is_active, `modified_at` = :modified_at WHERE `banners`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':modified_at', $_modified_at);

        $result = $stmt->execute();


        header("location:index.php");

        return $result;
    }

    public function trash()
    {
        $_id = $_GET['id'];
        $_is_deleted = 1;

        


        $query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id;";

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
        

        $query = "SELECT * FROM `banners` WHERE is_deleted = 1";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $banners = $stmt->fetchALL();

        return $banners;
    }

    public function restore()
    {
        $_id = $_GET['id'];
        $_is_deleted = 0;

        


        $query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id;";

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

        


        $query = "DELETE FROM banners WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        header("location:index.php");

        return $result;
    }
}
