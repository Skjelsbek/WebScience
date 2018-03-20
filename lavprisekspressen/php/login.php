<?php
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

		$hPW = crypt($pass, $salt);

		if($hPW == $passwd)
		{
			header("Location: ../?page=home");
		}
		else
		{
			echo 'Wrong pw!';
		}
	}
	else
	{
		echo 'Wrong username!';
	}
?>
