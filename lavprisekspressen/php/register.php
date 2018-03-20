<?php
	require_once('do_not_open_password_inside.php');

	$name = isset($_POST['uname']) ? $_POST['uname'] : null;
	$pw = isset($_POST['passwd']) ? $_POST['passwd'] : null;
	$mail = isset($_POST['email']) ? $_POST['email'] : null;

	$name = $mysqli->real_escape_string($name);
	$mail = $mysqli->real_escape_string($mail);
	$name = htmlspecialchars($name);
	$mail = htmlspecialchars($mail);

	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	$salt = "$5\$rounds=5000$" . $salt . "$";

	$hPW = crypt($pass, $salt);

	$sql = "INSERT INTO users (uname, passwd, email, salt) VALUES ('$name', '$hPW','$mail', '$salt')";
	$mysqli->query($sql) or die($mysqli->error);

	header("Location: ../?page=home");
?>
