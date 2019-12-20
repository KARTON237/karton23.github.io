<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('NAME', 'myapp');

$db = mysqli_connect(HOST, USER, PASSWORD, NAME);

if ($db) {
	
}
else {
	echo "<H2>Connection Failed!!!</H2>";
}

$message = "";

if (isset($_POST['submit'])) {
	
	$email 	= $_POST["email"];
	$password 	= $_POST["password"];
	
	$email 		= mysqli_real_escape_string($db, $email);
	$password 	= mysqli_real_escape_string($db, $password);
	
	$email_admin = "admin@admin.com";
	$pass_admin = "12345";
	
	
	if (!(($comp_admin_email == 0) && ($comp_admin_password == 0))) {
		
		$mysql = "SELECT * FROM users WHERE email='$email'";
		
		$dbresult = mysqli_query($db, $mysql) or die("Error: ".mysqli_error($db));
		$row = mysqli_fetch_array($dbresult, MYSQLI_ASSOC);
		
		if (mysqli_num_rows($dbresult) == 1) {
			
			$mysqlpass = "SELECT firstname, lastname, password FROM users WHERE email='$email'";
			
			$result_pass = mysqli_query($db, $mysqlpass);
			$rowpas = mysqli_fetch_array($result_pass, MYSQLI_ASSOC);
			
			$ret_pass = $rowpas['password'];
			$ret_fname		= $rowpas['firstname'];
			$ret_lname 		= $rowpas['lastname'];
			
			$result = strcmp($password, $ret_pass);
			
			if (($dbresult == 0)) {
				echo "Welcome back $ret_fname $ret_lname";
			}
			else {
				echo "Invalid password";
			}
		}
		else {
			$message = "EmailID does not exist";
		}
		echo "<br /> $message";
	}
	else {
		
		$ret_query_admin = "SELECT * FROM users";
		
		$admin_query_result = mysqli_query($db, $ret_query_admin);
		$admin_total_rows = mysqli_num_rows($admin_query_result);
		
		if ($admin_total_rows > 0) {
			
			echo "<br /><b>Welcome back Administrator!</b><br /><br />";
			echo "<table style=\"width:100%\" border = \"2px\"<tr><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
			
			for ($i = 0; $i < $admin_total_rows; $i++) {
				
				$rowsad = mysqli_fetch_array($admin_query_result);
				
				$ret_fname	= $rowsad['firstname'];
				$ret_lname	= $rowsad['lastname'];
				$ret_email 		= $rowsad['email'];
				$ret_password 	= $rowsad['password'];
				
				echo "<tr><td>$ret_fname</td><td>$ret_lname</td><td>$ret_email</td></tr>";
			}
		}
	}
}

?>