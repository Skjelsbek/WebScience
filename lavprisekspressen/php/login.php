<?php
	$host = 'localhost';
	$name = 'root';
	$pass = '';
	$db = 'lavprisekspressen';

	$mysqli = new mysqli($host,$name,$pass,$db);

	$email = $_POST['email'];
	$pw = $_POST['passwd'];

	$sql = "SELECT passwd FROM users WHERE email = '$email'";
	$result = $mysqli->query($sql);
	$realPw = $result->fetch_assoc()["passwd"];
	if($realPw == $pw)
	{
		header("Location: ../?page=home");
	}
	else
	{
		echo 'Wrong pw!';
	}
?>
