<!DOCTYPE html>
<html>
<head>
	<title>Sign Up page</title>
</head>
<body>
<h1>Sign Up</h1>
<form action="includes/signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<br>
	<input type="text" name="last" placeholder="Lastname">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="uid" placeholder="Username">
	<br>
	<input type="password" name="pwd" placeholder="Password">
	<br>
	<button type="submit" name="submit">Submit data</button>
</form>
</body>
</html>