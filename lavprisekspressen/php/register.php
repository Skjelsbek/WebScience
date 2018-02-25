<?php
	$host = 'localhost';
	$name = 'root';
	$pass = '';
	$db = 'lavprisekspressen';

	$mysqli = new mysqli($host,$name,$pass,$db);

	$name = isset($_POST['uname']) ? $_POST['uname'] : null;
	$pw = isset($_POST['passwd']) ? $_POST['passwd'] : null;
	$mail = isset($_POST['email']) ? $_POST['email'] : null;

	$sql = "INSERT INTO users (uname, passwd, email) VALUES ('$name', '$pw','$mail')";
	$mysqli->query($sql) or die($mysqli->error);

	header("Location: ../?page=home");
	die();
?>
