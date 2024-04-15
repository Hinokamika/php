<?php
include '../../include/connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['reply_question'])) {
        $db = "INSERT INTO answers (answer_text) VALUES (:answer_text)";
        $stm = $pdo->prepare($db);
        $stm->bindValue(':answer_text', $_POST['answer_text']);
        $stm->execute();

        header("Location: ../Question/Question.html.php");
        exit;
    } else {
        header("Location: Menufile.html.php"); 
        exit;
    }
}
?>