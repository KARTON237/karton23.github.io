<?php
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$password = $_POST['password'];

if(!empty($username) ||  !empty($firstname)|| !empty($lastname) || !empty($email)|| !empty($phonenumber) || !empty($address) || !empty($password)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "kartondb";

    // Create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword,$dbName);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else {
        $SELECT  = "SELECT email from registration where email = ? Limit 1";
        $INSERT = "INSERT INTO registration (username, firstname, lastname, email, phonenumber, address, password) 
        VALUES(?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssiss", $username, $firstname, $lastname, $email, $phonenumber, $address, $password);
            $stmt->execute(); 
            echo "New user created successfully";
            header('Location: admin.php');
        }else {
            echo "Username Already exist";
        }
        $stmt->close();
        $conn->close();
       

    }

    } else {
        echo "All fields are required";
        die();
    }
?> 