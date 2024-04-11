<?php
// MySQL database credentials
$servername = "localhost";  // Change this if your database is on a different server
$username = "root";  // Replace with your MySQL username
$password = "487115";  // Replace with your MySQL password
$database = "cw_database";  // Replace with your MySQL database name

try {
    // Create a PDO instance
    $pdo = new PDO('mysql:host=localhost; dbname=cw_database; charset=utf8mb4', 'root', '487115');
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // You can remove this line once you confirm the connection is successful
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>