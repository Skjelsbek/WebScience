<?php
  $host = 'localhost';
  $name = 'root';
  $pass = '';
  $db = 'lavprisekspressen';

  $mysqli = new mysqli($host,$name,$pass,$db);

  $sql = "SELECT * FROM news";
  $result = $mysqli->query($sql);

  while ($row = $result->fetch_assoc()) {
    echo "<div class=\"content\">";
    echo "<h1>";
    echo utf8_encode($row["heading"]);
    echo "</h1>";
    echo "<p>";
    echo utf8_encode($row["content"]);
    echo "</p>";
    echo "</div>";
  }
?>
