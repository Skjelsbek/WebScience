  <?php
  // Include connection to db
  require_once('do_not_open_password_inside.php');

  // Query grabbing every news from news table
  $sql = "SELECT * FROM news";
  $result = $mysqli->query($sql);

  // Putting every news page in an array
  $i = 0;
  while ($row = $result->fetch_assoc())
  {
    $array[$i] =
    "<div class='content'><h1>"
    . utf8_encode($row['heading'])
    . "</h1><p>"
    . utf8_encode($row['content'])
    . "</p></div>";
    $i++;
  }

  // Printing every news page
  for ($j = 0; $j < $i; $j++)
  {
    echo $array[$j];
  }
  
  // Print the first page again at the end to make the news carousel work
  echo $array[0];
?>
