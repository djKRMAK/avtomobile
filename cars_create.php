<?php require('connect.php'); ?>

<?php
$sql = "INSERT INTO cars (model, mileage, color, brand_id) VALUES ('" . $_POST['model'] . "', '" . $_POST['mileage'] . "', '" . $_POST['color'] . "', '" . $_POST['brand_id'] . "');";
$mysqli->query($sql);
header('Location: cars.php');
?>