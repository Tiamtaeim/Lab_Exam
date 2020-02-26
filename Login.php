<?php
	session_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<form >
		<fieldset>
		<legend>Login</legend>
	
			<tr>
				<td colspan=3><h3>LOGIN</h3></td>
			</tr>
			<tr>
				<td>User Id</td>
				<br><td width=200><input type="text" name="User Id" value=""/></td>
				<td width=25></td>
			</tr>
			<br>
			<tr>
				<td>Password</td>
				<br><td width=200><input type="text" name="Password" value=""/></td>
				<td width=25></td>
			</tr>
			<br>
			<tr>
				<br><td colspan=3><input type="submit" name="login" value="login"/>
					<a href="Registration.php">Register</a></h3></td>
			</tr>

		</form >
		</fieldset>
	</body>
</html>
