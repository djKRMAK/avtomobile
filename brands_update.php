<?php require('connect.php'); ?>

<?php
$sql = "UPDATE brands (name, year_est) VALUES ('" . $_POST['name'] . "', '" . $_POST['year_est'] . "');";
$mysqli->query($sql);
header('Location: brands.php');
?>