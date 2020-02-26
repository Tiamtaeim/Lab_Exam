<!DOCTYPE html> 
<html>

<body>
	<form >
	<fieldset>
	<legend>Registration</legend>
	<table>	
		<tr>
			<td>Id</td>
			<br><td width=200><input type="text" name="Id" value=""/></td>
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
			<td>Confirm Password</td>
			<br><td width=200><input type="text" name="Confirm Password" value=""/></td>
			<td width=25></td>
		</tr>
		<br>
		<tr>
			<td>Name</td>
			<br><td width=200><input type="text" name="name" value=""/></td>
			<td width=25></td>
		</tr>
		<br>
		<tr>
			<td>User Type </td>
			<td width=200>
				<br><input type="radio" name="gender" value="User"/> User
				<input type="radio" name="gender" value="Admin"/> Admin
			</td>
			<td width=25></td>
		<tr>
			<td colspan=3><p></p></td>
		</tr>
		<tr>
				<br><td colspan=3><input type="submit" name="Registration" value="SignUp"/>
					<a href="Login.php">Sign In</a></h3></td>
			</tr>

	</table>
	</fieldset>
	</form >
	</body>
</html>
