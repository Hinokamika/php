<?php
    include '../../include/connection.php';

    $query = "SELECT * FROM questions";
    $stmt = $pdo->query($query);


    if ($stmt) {
        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $questions = []; 
    }
?>