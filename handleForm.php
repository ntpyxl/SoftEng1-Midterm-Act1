<?php 

session_start();

if(isset($_POST['loginButton'])) {

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	header('Location: index.php');
}

?>