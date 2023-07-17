<?php
require_once 'config.php';
$title = $_POST['title'];
$desc = $_POST['desc'];
$engine = $_POST['engine'];
$fuel = $_POST['fuel'];
$price = $_POST['price'];
$owners = $_POST['owner_name'];
$ages = $_POST['owner_age'];

if (!is_numeric($price)) {
    echo "Цена должна быть числом.";
    exit;
}

foreach ($ages as $age) {
    if (!is_numeric($age)) {
        echo "Возраст владельца должен быть числом.";
        exit;
    }
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
echo 'RAPIL CHAVARO ';