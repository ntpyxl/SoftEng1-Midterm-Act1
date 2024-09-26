<html>
	<head>
		<title>Act #1 - Session Variable</title>
	</head>
	<body>
		<?php session_start(); ?>

		<h2> USER LOGGED IN:
		<?php
		if(isset($_SESSION['username']))
			{echo $_SESSION['username'];} ?>

		<br> <br>
	
		USER'S PASSWORD:
		<?php
		if(isset($_SESSION['password'])) 
			{echo $_SESSION['password'];} ?>
		</h2>

		<form action = "handleForm.php" method="POST">
			Username <input type="text" placeholder="insert username here" name="username" size="14"> <br> <br>
			Password <input type="password" placeholder="insert password here" name="password" size="14"> <br> <br>
			<input type="submit" value="log in" name="loginButton">
		</form>
		<input type="submit" value="log out" name="logoutButton" onclick="location.href = 'unset.php'">
	</body>
</html>