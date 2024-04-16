<?php
include '../../include/connection.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        try {
            // Retrieve the form data
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Prepare SQL statement to select user by email and password
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $password);
            $stmt->execute();

            // Check if a user with the provided credentials exists
            if ($stmt->rowCount() > 0) {
                // User exists, fetch user data
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Redirect to welcome page
                header("Location: ../Menu/Menufile.html.php");
                exit;
            } else {
                // Handle invalid login
                echo "Invalid email or password";
            }
        } catch (PDOException $error) {
            // Handle database connection errors
            echo "Connect to DB error: " . $error->getMessage();
        }
    }

    if (!isset($_POST['register'])) {
        include "Login.html.php";
    } else {
        try {
            $db = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stm = $pdo->prepare($db);
            $stm->bindValue(':username', $_POST['username']);
            $stm->bindValue(':email', $_POST['email']);
            $stm->bindValue(':password', $_POST['password']);
            $stm->execute();
            echo "Add account succeed !";
        } catch (PDOException $error) {
            echo "Connect to DB error: $error";
        }
    }
}
?>
