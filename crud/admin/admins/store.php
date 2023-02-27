<pre>
    <?php
    var_dump($_POST);
    $user=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['Password'];
    $phone=$_POST['phone'];
    
    // $_title = $_POST['title'];
    // echo $_title;

    // //  connection to database

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=anik", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // insert query 
    $query = "INSERT INTO `admintable` (`username`, `email`, `userPassword`, `phone`) VALUES (:user, :email, :userPassword, :phone);
    ";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':userPassword',$password);
    $stmt->bindParam(':phone',$phone);

    $result = $stmt->execute();

    var_dump($result);
    ?>
</pre>