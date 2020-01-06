<?php

error_reporting(E_ALL ^ E_DEPRECATED);

// Initialize the session
session_start();

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "kartondb";
    // Create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword,$dbName);

    mysql_select_db($dbName);


if(isset($_POST['email']))
  { 
    $username = $_POST['email']; 
 

    $pword = $_POST['password']; 


$sql = "select * from registration  where email = '".$username."' and  password = '".$password."'";

$result = mysql_query($sql);
 
if(mysql_num_rows($result)==1){
 
  // include('budget.php'); 


   }else{
    echo "You have entered incorrect password";
    exit();
   }

}
session_destroy();
               
?>