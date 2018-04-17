<?php
  // Include connection to db
  require_once('do_not_open_password_inside.php');

  // Query retrieving whole tickets table
  if (isset($_SESSION['uid'])) {
    $sql = "SELECT * FROM tickets WHERE UserID = " . $_SESSION['uid'];
    $result = $mysqli->query($sql);

    // Looping through rows in table to print every ticket
    while ($row = $result->fetch_assoc()) {
      echo "<div class='ticket_container'>";
      echo "<div class='container'>";
      echo "<div class='from'>";
      echo $row['_from'];
      echo "</div><div class='to'>";
      echo $row['_to'];
      echo "</div><div class='date'>";
      echo $row['_date'];
      echo "</div></div></div>";
    }
  }
?>
