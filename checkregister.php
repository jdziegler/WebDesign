<!DOCTYPE html>
<html>
<body>
<?php
	//input
	//$q = intval($_GET['q']);

	//constants
	$servername = "localhost";
	$username = "jz312";
	$password = "rKrBqYpXUPPf";
	$db = "class-2015-1-04-547-320-03_jz312";


	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully <br><br>";
	
	// Create Table
		$sql = "CREATE TABLE users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		username TEXT NOT NULL,
		password TEXT NOT NULL,
		firstname TEXT NOT NULL,
		lastname TEXT NOT NULL,
		reg_date TIMESTAMP
		)";
		if (mysqli_query($conn, $sql)) {
    			echo "Table users created successfully <br>";
		} else {
    			//echo "Error creating table: " . mysqli_error($conn) . "<br>";
		}

		
	$username = $_POST['myusername'];
	$password = $_POST['mypassword'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$sql = "SELECT username from users WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	
	//echo mysqli_num_rows($result) . " rows <br>";
	if ( mysqli_num_rows($result) > 0 ){
		echo "Username already registered <br>";
		echo "<a href=login>Login</a><br>";
	} else {
		//register user
		$sql = "INSERT INTO users (username, password, firstname, lastname) VALUES ('$username', '$password', '$firstname', '$lastname')";
		if (mysqli_query($conn, $sql)) {
    			echo "New record created successfully<br>";

			//Login the registered account.
			session_start();
			$_SESSION["username"]=$username;
			$_SESSION["password"]=$password;
			header("location:register_success");
		} else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	$sql="SELECT * FROM users WHERE id ='".$q."'";
	$result = mysqli_query($conn,$sql);
	if(!$result){
		echo "No result";
	} else {
		while ($row = mysqli_fetch_assoc($result)) {
    			echo $row['firstname'] . " ";
    			echo $row['lastname'] . "<br>";
		}
	}
?>

</body>
</html>

