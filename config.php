<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";
$charset = 'utf8';
$dsn = "mysql:host={$servername};dbname={$dbname};charset={$charset}";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
