<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
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
      <a class="dropdown-item" href="signups.php">Sign up</a>
    </div>
  </li>
</ul>
</nav>
<br>

<div class="container">

<!-- form card login -->
<div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="connect.php" method="POST">
                                <div class="form-group ">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="" >
                                    <div class="invalid-feedback">Enter your missing Email.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password"  required="">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                   
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                                <p>Don't have an account <a href="signups.php">Sign up now</a>.</p>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
</div>  

</body>
</html>