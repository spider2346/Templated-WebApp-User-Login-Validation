<?php
	require_once("sqltemplate.php");
	require_once("dblogin.php");
	
	$sqltemplate = new SqlTemplate($options);

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$count = $sqltemplate->FetchColumn("SELECT Count(username) from user_login where username = :username and password = :password",['username' => $username, 'password' => $password]);
	
	if ($count === 1)
	{
		header('location: ""');
		die;
	}
		else
	{
		header('location: ""');
		die;
	}
?>