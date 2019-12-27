 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign UP Page</title>
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

<?php

require('config.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
    // removes backslashes
$username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
$username = mysqli_real_escape_string($con,$username); 
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);

    $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "";
    }
}else{

?>
  
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
                        
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="" >
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password" >
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>

                                <div class="form-group ">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                   
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Sign up</button>
                                <p>Have an account? <a href="logins.php">Login</a>.</p>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card sign up -->

                   
</div>

<?php } ?>


  
</body>
</html>