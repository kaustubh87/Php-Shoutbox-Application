<?php
include 'database.php';


if(isset($_POST['submit']))
{

	$username = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

	date_default_timezone_set('US/Central');
	$time = date('h:i:s a', time());

		//Validate input
	if(!isset($username) || $username == '' || !isset($message) || $message == ''){
		$error = "Please fill in your name and a message";
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else {
		$query = "INSERT INTO shouts (user, Message, time)
				VALUES ('$username','$message','$time')";
		
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
	}

}

?>