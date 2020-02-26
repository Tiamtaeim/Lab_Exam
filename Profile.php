<?php
	session_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Profile Page</title>
	</head>
	<body>
		<form>
		<table border="1">	
			<tr>
				<td colspan=3><h3><center>Profile</center></h3></td>
			</tr>
			<tr>
				<td>Id</td>
				<br><td width=200>
				<input type="text" name="Id" value="16-10101-2"/>
			</tr>
			<br>
			<tr>
				<td>Name</td>
				<br><td width=200>
				<input type="text" name="Name" value="Bob"/>
				<td width=25></td>
			</tr>
			<br>
			<tr>
				<td>User Type </td>
				<td width=200>
					<input type="text" name="Admin" value="Admin"/>
				</td>
				<td width=25></td>
			<tr>
			<td><a href="Go to Home">Go to Homer</a></h3></td>
			</tr>

		</table>
		<form>
	</body>
</html>
