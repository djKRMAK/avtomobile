<?php require('connect.php'); ?>

<?php
$sql = "UPDATE cars SET brand_id='" . $_POST['brand_id']  ."',  model='" . $_POST['model'] . "', mileage='" . $_POST['mileage'] . "', color='" . $_POST['color'] . "' WHERE id=" . $_POST['id'] . ";";
$mysqli->query($sql);
header('Location: cars.php');
?>