<?php
  // Including db connection
  require_once('do_not_open_password_inside.php');

  // Starting session
  session_start();

  // Getting desired stations
  $from = $_POST['from'];
  $to = $_POST['to'];

  // Throws an error if user said he was going to the place he is traveling from
  if ($from == $to) {
    header("Location: ../?id=1&from=to");
    die();
  }

  // Geetting dates
  $departure = $_POST['departure_date'];
  $return = $_POST['return_date'];

  // Splitting dates into individual month-, day- and year variables
  $arr = explode("/", $departure);
  $m = $arr[0];
  $d = $arr[1];
  $y = $arr[2];

  // Connect the individual variables with "-" between instead of "/", for it to match the DATE variable in db table
  $departure = $y . "-" . $m . "-" . $d;

  // Splitting current date
  $arr = explode("-", date("Y-m-d"));
  $y2 = $arr[0];
  $m2 = $arr[1];
  $d2 = $arr[2];

  // Check if selected date happen to be before current date
  if (($m < $m2 && $y <= $y2) || ($d < $d2 && $m == $m2 && $y == $y2)) {
    header("Location: ../?id=1&date_selection=failure");
    die();
  }

  // Checks if session is not running (if user is logged in)
  if (!isset($_SESSION['uname']))
  {
    // Provides login form if there is no session running
    echo "<form id='login_form' action='../php/login.php' method='post'>
      <input type='email' placeholder='E-post addresse' name='email'>
      <input type='password' placeholder='Passord' name='passwd'>
      <input id='btn1' type='submit' value='Logg Inn'>
      <p id='create_account'>Opprett Konto</p>
    </form>";
  }
  else
  {
    // Insert departure ticket into db
    $sql = "INSERT INTO tickets (_from, _to, _date, UserID) VALUES ('" . $from . "', '" . $to . "', DATE '" .  $departure . "', '" . $_SESSION['uid'] ."')";
    $mysqli->query($sql) or die($mysqli->error);
    header("Location: ../?page=tickets");

    // Checks if the user wants return or not
    if (!empty($return))
    {
      // Splitting the selected date
      $arr = explode("/", $return);
      $m3 = $arr[0];
      $d3 = $arr[1];
      $y3 = $arr[2];

      // Merge with correct syntax
      $return = $y3 . "-" . $m3 . "-" . $d3;

      // Check if selected date happen to be before current date or before departure date
      if (($m < $m2 && $y <= $y2) || ($d < $d2 && $m == $m2 && $y == $y2) || ($m3 < $m && $y3 <= $y) || ($d3 < $d && $m3 == $m && $y3 == $y)) {
        header("Location: ../?id=1&date_selection=failure");
        die();
      }

      // Inserting return ticket into db
      $sql = "INSERT INTO tickets (_from, _to, _date, UserID) VALUES ('" . $to . "', '" . $from . "', DATE '" .  $return . "', '" . $_SESSION['uid'] ."')";
      $mysqli->query($sql) or die($mysqli->error);
    }

    // Redirect to my tickets page with a confirmation that the ticket was successfully added
    header("Location: ../?page=tickets&ticket=added");
  }
?>
