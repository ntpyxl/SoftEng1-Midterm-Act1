<?php 

session_start();

if(isset($_POST['loginButton'])) {

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if($username == $_SESSION['username']) {
		echo "$username is already logged in! Wait for them to log out first!";
	} else {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
	}

	header('Location: index.php');
}

?>