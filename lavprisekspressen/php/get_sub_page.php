<?php
// Query retrieving every sub page of the main page
$sql = "SELECT * FROM sub_pages WHERE main_page_id = '" . $_GET['id'] . "' ORDER BY id" ;
$result2 = $mysqli->query($sql);

// Store every sub page in an array
$i = 0;
while ($row = $result2->fetch_assoc())
{
  $array[$i] =
  "<div class='content'><h1>"
  . utf8_encode($row['title'])
  . "</h1><p>"
  . utf8_encode($row['content'])
  . "</p></div>";
  $i++;
}

// Printing every sub page
for ($j = 0; $j < $i; $j++)
{
  echo $array[$j];
}

// Print the first page again at the end to make the sub page carousel work
echo $array[0];
?>
