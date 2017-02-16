<?php require('connect.php'); ?>

<?php
// $_POST['name']
// $_POST['year_est']
$sql = "INSERT INTO brands (name, year_est) VALUES '" . $_POST['name'] . "','" . $_POST['year_est'] . "';";
$mysqli->query($sql);
headers('Location: brands.php');