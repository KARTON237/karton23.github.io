<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
            <a class="nav-link" href="dashboard.php">Dashboard</a>
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

<H1>Welcome </h1>
  <h2>User Table</h2>          
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "kartondb";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname, lastname, phonenumber, address FROM kartontransport";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    echo "<table class='table'>
    <thead class='thead-dark'>
      <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>";


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["phonenumber"]."</td><td>".$row["address"]."</td></tr>";
    }


    echo "</tbody></table>";

} else {
    echo "0 results";
}
$conn->close();
?> 
</div>

</body>
</html>