<?php
    try{
        include '../../include/connection.php';
        $sql = "DELETE FROM questions WHERE id = :id";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':id', $_POST['id']);
        $stm->execute();
        header('Location: Question.html.php');
        exit;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
?>