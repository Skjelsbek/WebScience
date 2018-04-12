<?php
  session_start();

  require_once('./php/do_not_open_password_inside.php');
  require_once('./html/header.html');
  require_once('./html/sidebar.html');

  if (!isset($_GET["id"])) {
    header("location: ?id=1");
  }
  $pageNumber = $_GET["id"];
  echo $pageNumber;
  if (isset($_SESSION['email'])) {
    echo 'You are logged in!';
  }

  require_once('./php/news.php');
  require_once('./html/footer.html');
?>
