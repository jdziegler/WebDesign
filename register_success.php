<?php
	session_start();
	if(!session_is_registered(username)){
		header("location:register");
	}
?>

<html>
<body>
Thanks for registering!
<br>
<a href="home">Home</a>

</body>
</html>
