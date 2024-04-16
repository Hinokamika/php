<?php
try{
    include '../../include/connection.php';
    $sql = "SELECT * FROM questions";
    $questions = $pdo->query($sql);
}
catch (PDOException $e){
    echo $e->getMessage();
}
?>