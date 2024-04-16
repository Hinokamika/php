<?php
    include '../../include/connection.php';

    $query = "SELECT * FROM posts";
    $posts = $pdo->query($query);
?>