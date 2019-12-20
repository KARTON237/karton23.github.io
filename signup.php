<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('NAME', 'myapp');

$db = mysqli_connect(HOST, USER, PASSWORD, NAME);

if ($db) {
	echo "<H2>Connection Successfull!</H2>";
}
else {
	echo "<H2>Connection Failed!!! </H2>";
}

$message = "";

if (isset($_POST["signmeup"])) {
	
	$fname		= $_POST["signup-firstname"];
	$lname 		= $_POST["signup-lastname"];
	$email  		= $_POST["signup-email"];
	$password 		= $_POST["signup-password"];

	
	if ($password_match) {
		
		$fname	= mysqli_real_escape_string($db, $fname);
		$lname 	= mysqli_real_escape_string($db, $lname);
		$email 		= mysqli_real_escape_string($db, $email);
		$password 	= mysqli_real_escape_string($db, $password);
		
		$mysql = "SELECT email FROM users WHERE email='$email'";
		
		$result = mysqli_query($db, $mysql)
		or die("Error: ".mysqli_error($db));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if (mysqli_num_rows($result) == 1) {
			$message = "Email: <b>$email</b> already taken!!";
		}
		else {
			$query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
			$confirm = mysqli_query($db, $query);
			if ($confirm) {
				$message = "Thank You $fname! you are now registered!!";
			}

}

?>