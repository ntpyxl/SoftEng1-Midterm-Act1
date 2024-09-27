<?php 

session_start();

if(isset($_POST['loginButton'])) {

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if(isset($_SESSION['isLoggedIn'])) {
        $_SESSION['attemptedConcurrentLogin'] = 1;
		header('Location: index.php');
	} else {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
        $_SESSION['isLoggedIn'] = 1;
	}

	header('Location: index.php');
}

?>