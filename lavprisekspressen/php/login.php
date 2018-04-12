<?php
	session_start();

	require_once('do_not_open_password_inside.php');

	$email = $_POST['email'];
	$pw = $_POST['passwd'];

	$sql = "SELECT salt, passwd FROM users WHERE email = '$email'";
	$result = $mysqli->query($sql);

	if (isset($result))
	{
		$result = $result->fetch_assoc();
		$salt = $result["salt"];
		$passwd = $result["passwd"];

		$hPW1 = crypt($pw, $salt);
		
		if($hPW1 == $passwd)
		{
			$_SESSION['email'] = $email;
			header("Location: ../?id=1&login=success");
		}
		else
		{
			header("Location: ../?id=1&login=failure");
		}
	}
	else
	{
		header("Location: ../?id=1&login=failure");
	}
?>
