<?php
require('config.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
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
  <a class="navbar-brand" href="#">Project</a>

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
        <a class="dropdown-item" href="logout.php">Logout</a>
        
      </div>
    </li>
  </ul>
</nav>
<br>



<div class="container">

<H1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
  <h2>User Table</h2>
  <p>The </p>            
  <table class="table">
    <thead>
      <tr>
        <th>username</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SESSION['username']; ?></td>
       
      </tr>
      
      
    </tbody>
  </table>
</div>

</body>
</html>