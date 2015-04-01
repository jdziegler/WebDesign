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
	echo "Connected successfully <br><br>";
	
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
    			echo "Error creating table: " . mysqli_error($conn) . "<br>";
		}

		
	$username = $_POST['myusername'];
	$password = $_POST['mypassword'];

	$sql = "SELECT * from users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	
	echo mysqli_num_rows($result) . " rows <br>";
	if ( mysqli_num_rows($result) > 0 ){
		//Login the account.
		session_start();
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
		header("location:login_success");
	} else {
		echo "incorrect username or password <br>";
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

