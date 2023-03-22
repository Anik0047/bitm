<?php

namespace Seip;

use PDO;

class Users
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

    public function login()
    {
        session_start();
        $root = "http://localhost/PHP/crud/";

        // var_dump($_FILES);\

        $approot = $_SERVER['DOCUMENT_ROOT'] . "/PHP/crud/";
        // change korte hbe destination tah
        $_userName = $_POST['userName'];
        $_password = $_POST['password'];

        // Insert query
        $query = "SELECT COUNT(*) AS total FROM `users` WHERE user_name LIKE :userName AND password LIKE :emailPassword";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':userName', $_userName);
        $stmt->bindParam(':emailPassword', $_password);

        $stmt->execute();

        $totalfound = $stmt->fetch();


        if ($totalfound['total'] > 0) {
            $_SESSION['is_authenticated'] = true;
            header("location:" . $root . "admin/dashboard.php");
        } else {
            $_SESSION['is_authenticated'] = false;
            header("location:" . $root . "403.php");
        }
    }

    public function sign_up()
    {
        $root = "http://localhost/PHP/crud/";

        // var_dump($_FILES);\

        $approot = $_SERVER['DOCUMENT_ROOT'] . "/PHP/crud/";
        // change korte hbe destination tah
        $_userName = $_POST['userName'];
        $_fullName = $_POST['fullName'];
        $_email = $_POST['email'];
        $_password = $_POST['password'];
        $_phoneNumber = $_POST['phoneNumber'];

        // Insert query
        $query = "INSERT INTO `users` (`user_name`,`full_name`,`email`, `password`, `phone_number`) VALUES (:userName, :fullName, :email, :emailPassword, :phoneNumber);";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':userName', $_userName);
        $stmt->bindParam(':fullName', $_fullName);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':emailPassword', $_password);
        $stmt->bindParam(':phoneNumber', $_phoneNumber);

        $result = $stmt->execute();


        header("location:" . $root . "frontend/php/public/login.php");

        return $result;
    }


    public function index()
    {


        $query = "SELECT * FROM `users` WHERE is_deleted = 0";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $users = $stmt->fetchALL();

        return $users;
    }


    public function store()
    {

        // $approot = $_SERVER['DOCUMENT_ROOT'] . "/php/crud/";
        // change korte hbe destination tah
        $_user_name = $_POST['user_name'];
        $_full_name = $_POST['full_name'];
        $_user_email = $_POST['user_email'];
        $_user_password = $_POST['user_password'];
        $_phone_number = $_POST['phone_number'];


        // Insert query
        $query = "INSERT INTO `users` (`user_name`, `full_name`, `email`, `password`, `phone_number`) VALUES (:user_name, :full_name, :user_email, :user_password, :phone_number);";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':user_name', $_user_name);
        $stmt->bindParam(':full_name', $_full_name);
        $stmt->bindParam(':user_email', $_user_email);
        $stmt->bindParam(':user_password', $_user_password);
        $stmt->bindParam(':phone_number', $_phone_number);

        $result = $stmt->execute();


        header("location:index.php");

        return $result;
    }

    public function show()
    {
        $_id = $_GET['id'];

        $query = "SELECT * FROM `users` Where id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $user = $stmt->fetch();

        return $user;
    }

    public function edit()
    {
        $_id = $_GET['id'];



        $query = "SELECT * FROM `users` Where id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $user = $stmt->fetch();

        return $user;
    }

    public function update()
    {
        $_id = $_POST['id'];
        $_user_name = $_POST['user_name'];
        $_full_name = $_POST['full_name'];
        $_user_email = $_POST['user_email'];
        $_user_password = $_POST['user_password'];
        $_phone_number = $_POST['phone_number'];



        // Insert query
        $query = "UPDATE `users` SET `user_name` = :user_name, `full_name` = :full_name, `email` = :user_email, `password` = :user_password, `phone_number` = :phone_number WHERE `users`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':user_name', $_user_name);
        $stmt->bindParam(':full_name', $_full_name);
        $stmt->bindParam(':user_email', $_user_email);
        $stmt->bindParam(':user_password', $_user_password);
        $stmt->bindParam(':phone_number', $_phone_number);

        $result = $stmt->execute();


        header("location:index.php");

        return $result;
    }

    public function trash()
    {
        $_id = $_GET['id'];
        $_is_deleted = 1;




        $query = "UPDATE `users` SET `is_deleted` = :is_deleted WHERE `users`.`id` = :id;";

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


        $query = "SELECT * FROM `users` WHERE is_deleted = 1";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $users = $stmt->fetchALL();

        return $users;
    }

    public function restore()
    {
        $_id = $_GET['id'];
        $_is_deleted = 0;




        $query = "UPDATE `users` SET `is_deleted` = :is_deleted WHERE `users`.`id` = :id;";

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




        $query = "DELETE FROM users WHERE `users`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        header("location:index.php");

        return $result;
    }
}
