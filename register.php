<?php
	session_start();
	if(session_is_registered(username)){
		header("location:register_success");
	}
?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form1" method="post" action="checkregister">
		<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
					<td colspan="3"><strong>Member Registration </strong></td>
				</tr>
				<tr>
					<td width="100">Username</td>
					<td width="6">:</td>
					<td width="294"><input name="myusername" type="text" id="myusername"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="mypassword" type="password" id="mypassword"></td>
				</tr>
                                <tr>
                                        <td>First Name</td>
                                        <td>:</td>
                                        <td><input name="firstname" type="text" id="firstname"></td>
                                </tr>
                                <tr>
                                        <td>Last Name</td>
                                        <td>:</td>
                                        <td><input name="lastname" type="text" id="lastname"></td>
                                </tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Register"></td>
				</tr>
			</table>
		</td>
		</form>
	</tr>
</table>
<p align="center">
	<a href="login">or Login</a>
</p>
