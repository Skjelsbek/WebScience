<?php
	require_once('do_not_open_password_inside.php');

	if (!isset($_POST['uname']) || !isset($_POST['passwd']) || !isset($_POST['email']))
	{
		header("Location: ../?id=1&registration=failure");
		die();
	}
	else {
		$name = $_POST['uname'];
		$pw = $_POST['passwd'];
		$mail = $_POST['email'];
	}

	$name = $mysqli->real_escape_string($name);
	$mail = $mysqli->real_escape_string($mail);
	$name = htmlspecialchars($name);
	$mail = htmlspecialchars($mail);

	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	$salt = "$5\$rounds=5000$" . $salt . "$";

	$hPW = crypt($pw, $salt);

	$sql = "INSERT INTO users (uname, passwd, email, salt) VALUES ('$name', '$hPW','$mail', '$salt')";
	$mysqli->query($sql) or die($mysqli->error);

	header("Location: ../?id=1&registration=success");
	die();
?>
