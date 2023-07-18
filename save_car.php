<?php
require_once 'config.php';
require_once 'validate.php';

$title = $_POST['title'];
$desc = $_POST['desc'];
$engine = $_POST['engine'];
$fuel = $_POST['fuel'];
$price = $_POST['price'];
$owners = $_POST['ownerName'];
$ages = $_POST['ownerAge'];

$validationError = validateFormData($title, $desc, $engine, $fuel, $price, $owners, $ages);
if ($validationError !== null) {
    echo $validationError;
    die;
}

$sql = "INSERT INTO cars (title, `desc`, engine, fuel, price) VALUES ('$title', '$desc', '$engine', '$fuel', '$price')";
$pdo->exec($sql);
$carId = $pdo->lastInsertId();

for ($i = 0; $i < count($owners); $i++) {
    $ownerName = $owners[$i];
    $ownerAge = $ages[$i];
    $sql = "INSERT INTO old_owners (car_id, name, age) VALUES ('$carId', '$ownerName', '$ownerAge')";
    $pdo->exec($sql);
}
echo 'You have successfully added a car.';