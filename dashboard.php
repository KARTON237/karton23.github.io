<?php
require('config.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

    <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="logout.php">Logout</a>
        
      </div>
    </li>
  </ul>
</nav>
<br>



<div class="container">
<!-- form card Sign up -->
<div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Users</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="" method="POST">
                                
                                <div class="form-group ">
                        
                                    <label for="uname1">First name:</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="" >
                                    <div class="invalid-feedback">Oops, you missed the First name.</div>
                                </div>
                                <div class="form-group ">
                        
                                    <label for="uname1">Last name:</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="" >
                                    <div class="invalid-feedback">Oops, you missed the Last name.</div>
                                </div>
                                <div class="form-group ">
                        
                                    <label for="uname1">Phone number:</label>
                                    <input type="number" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="" >
                                    <div class="invalid-feedback">Oops, you missed the Phone number.</div>
                                </div>


                                <div class="form-group ">
                        
                                    <label for="uname1">Address:</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="" >
                                    <div class="invalid-feedback">Oops, you missed the Phone number.</div>
                                </div>
                               
                                <div>
                                   
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Submit</button>
                               
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card sign up -->

</div>

</body>
</html>