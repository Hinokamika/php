<?php
    if (isset($_POST['edit_question'])) {
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
            }
        }
        else {
            try {
                include '../../include/connection.php';
                $sql = 'SELECT * FROM questions WHERE id = :id';
                $stm = $pdo->prepare($sql);
                $stm->bindValue(":id", $_POST['id']);
                $stm->execute();
                $joke = $stm->fetch();
                $title = 'Editquestion';
                ob_start();
                $output = ob_get_clean();
            } catch (PDOException $e) {
                $title = 'An error has occured';
                $output = 'Database error: ' . $e->getMessage();
            }
            }
?>
