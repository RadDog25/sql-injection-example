<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$db = "test";
$table = "users";

try {
 
   $conn = new PDO("mysql:host=$servername;dbname={$db};", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "CREATE TABLE IF NOT EXISTS {$table} (email varchar(255), name varchar(255));";
   $conn->exec($sql);
 
} catch(PDOException $e) {
 
   echo "Connection failed: " . $e->getMessage();
 
}

$email = $_POST['email'];
$name = $_POST['name'];

$sql = "INSERT INTO {$table} (email, name) VALUES ('{$email}', '{$name}');";
$conn->query($sql);


echo "<h3>hi, {$name}! Thanks for subscribing!</h3>";