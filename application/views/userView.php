<!DOCTYPE html>
<html>
<head>
	<?php linkCSS("assets/css/style.css"); ?>
	<?php linkCSS("assets/css/main.css"); ?>
	<title>userview</title>
</head>
<body>
	<h1>User View Page</h1>
	<form method="POST" action="<?php echo BASE_URL; ?>/userController/userSignUp">
		<table>
			<tr>
				<td>Username : </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	<?php linkJS("assets/js/main.js"); ?>
	<?php linkJS("assets/js/script.js"); ?>
</body>
</html>