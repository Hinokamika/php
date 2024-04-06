<?php

    $host = 'localhost'; 
    $dbname = 'week6_db'; 
    $username = 'root'; 
    $password = '487115'; 
    $pdo = new PDO('mysql:host=localhost; dbname=week6_db; charset=utf8mb4', 'root', '487115');

    $query = "SELECT * FROM categories";
    $stmt = $pdo->query($query);


    if ($stmt) {
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $categories = []; 
    }


?>
