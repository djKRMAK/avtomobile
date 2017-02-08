<?php
$mysqli = new mysqli("localhost","tsd","Mint12345","avtomobile");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
  {
  echo "Svaka cast brate " . mysqli_connect_error();
  }
?>