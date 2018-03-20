  <?php
  require_once('do_not_open_password_inside.php');
  
  $sql = "SELECT * FROM news";
  $result = $mysqli->query($sql);

  $i = 0;
  while ($row = $result->fetch_assoc())
  {
    $array[$i] =
    "<div class=\"content\"><h1>"
    . utf8_encode($row["heading"])
    . "</h1><p>"
    . utf8_encode($row["content"])
    . "</p></div>";
    $i++;
  }

  for ($j = 0; $j < $i; $j++)
  {
    echo $array[$j];
  }

  echo $array[0];
?>
