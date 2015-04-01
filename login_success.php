<?php
	session_start();
	if(!session_is_registered(username)){
		header("location:login");
	}
?>

<html>
<body>
You are logged in as <?php echo $_SESSION['username'] . ".<br>"; ?>

<a href="logout">Logout</a>

</body>
</html>
