<?php

if(isset($_POST['username'])){
    $firstname = $_POST['username'];
  }

if(isset($_POST['firstname'])){
  $firstname = $_POST['firstname'];
}

if(isset($_POST['lastname'])){
  $lastname = $_POST['lastname'];
}

if(isset($_POST['phonenumber'])){
  $phonenumber = $_POST['phonenumber'];
}

if(isset($_POST['address'])){
  $address = $_POST['address'];
}

if(isset($_POST['password'])){
    $address = $_POST['password'];
  }

if(!empty($username) ||  !empty($firstname)|| !empty($lastname) || !empty($phonenumber) || !empty($address) || !empty($password)){

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "kartondb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  $INSERT = "INSERT into users(username,firstname,lastname,phonenumber,address,password) values(?,?, ?, ?, ?,?)";
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("ssss",$username,$firstname, $lastname, $phonenumber, $address, $password);
  $stmt->execute();
  header('Location: admin.php');
}
}

?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Karton Transportation</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="logins.php">Login</a>
        
      </div>
    </li>
  </ul>
</nav>
<br>


  
<div class="container">


<!-- form card Sign up -->
<div class="card rounded shadow shadow-sm">
            <div class="card-header">
                <h3 class="mb-0">Sign Up</h3>
                <p>Please fill this form to create an account.</p>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="" method="POST">
                    <div class="form-group ">
            
                        <label for="username">Username:</label>
                        <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="" >
                        <div class="invalid-feedback">Oops, you missed the username.</div>
                    </div>
                    <div class="form-group ">
            
                        <label for="firstname">First name:</label>
                        <input type="text" class="form-control form-control-lg rounded-0" name="firstname" id="firstname" required="" >
                        <div class="invalid-feedback">Oops, you missed the First name.</div>
                    </div>
                    <div class="form-group ">
            
                        <label for="lastname">Last name:</label>
                        <input type="text" class="form-control form-control-lg rounded-0" name="lastname" id="lastname" required="" >
                        <div class="invalid-feedback">Oops, you missed the Last name.</div>
                    </div>
                    <div class="form-group ">
            
                        <label for="phonenumber">Phone number:</label>
                        <input type="number" class="form-control form-control-lg rounded-0" name="phonenumber" id="phonenumber" required="" >
                        <div class="invalid-feedback">Oops, you missed the Phone number.</div>
                    </div>
                    <div class="form-group ">
            
                        <label for="address">Address:</label>
                        <input type="text" class="form-control form-control-lg rounded-0" name="address" id="address" required="" >
                        <div class="invalid-feedback">Oops, you missed the Phone number.</div>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control form-control-lg rounded-0"  name="password" id="password" required="">
                        <div class="invalid-feedback">Enter your password too!</div>
                    </div>

                    <div class="form-group ">
                        <label>Confirm Password:</label>
                        <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="">
                        <div class="invalid-feedback">Confirm password too!</div>
                    </div>
                    <div>
                        
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Sign up</button>
                    <p>Have an account? <a href="logins.php">Login</a></p>
                </form>
            </div>
            <!--/card-block-->
        </div>
        <!-- /form card sign up -->

                   
</div>



  
</body>
</html>