<html>
	<head>
		<title>Act #1 - Session Variable</title>
	</head>
	<body>
		<?php session_start(); ?>

        <br>
		<form action = "handleForm.php" method="POST">
			Username
            <input type="text" placeholder="insert username here" name="username" size="14" style="width: 170px;"> <br> <br>

			Password
            <input type="password" placeholder="insert password here" name="password" size="14" style="width: 170px;"> <br> <br>

			<input type="submit" value="log in" name="loginButton">
		</form>
		<input type="submit" value="log out" name="logoutButton" onclick="location.href = 'unset.php'">
		<br> <br>

        <?php
		if(isset($_SESSION['attemptedConcurrentLogin'])) {
			echo "USER '" . $_SESSION['username'] . "' IS ALREADY LOGGED IN! PLEASE LOGOUT FIRST!";
		} ?>

        <h2> 
		<?php
		if(isset($_SESSION['username'])) {
			echo "USER LOGGED IN: " . $_SESSION['username'];
		} ?>

        <br>
	
		<?php
		if(isset($_SESSION['password'])) { 
			echo "USER'S PASSWORD: " .$_SESSION['password'];
		} ?>
		</h2>

	</body>
</html>