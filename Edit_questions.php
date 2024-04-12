<?php
    if (isset($_POST['edit'])) {
        try {
            require '../../include/connection.php';
            $sql = "UPDATE questions
            SET question_text = :question_text,
            WHERE id = :id";
            $stm = $pdo->prepare($sql);
            $stm->bindValue(":question_text", $_POST['question_text']);
            $stm->bindValue(":id", $_POST['id']);
            $stm->execute();
            header('Location: Question.html.php');
            } catch (PDOException $exception) {
            echo "Connect to DB failed" . $exception;
            header('Location: ../Menu/Menufile.html.php');
            }
        }
?>