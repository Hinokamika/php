<?php
    include '../../include/connection.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['submit-post'])) {
            try {
                // Check if file is uploaded
                if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                    // Get file info
                    $fileName = $_FILES['image']['name'];
                    $fileTmpName = $_FILES['image']['tmp_name'];
                    $fileSize = $_FILES['image']['size'];
                    $fileType = $_FILES['image']['type'];
                    
                    // Get the file extension
                    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                    
                    // Valid extensions
                    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
                    
                    // Check if the uploaded file has a valid extension
                    if(in_array($fileExt, $allowedExtensions)) {
                        // Directory where the uploaded file will be saved
                        $uploadDir = '../../post_image/';
                        
                        // Generate a unique name for the uploaded file to prevent overwriting
                        $uniqueFileName = uniqid('image_').'.'.$fileExt;
                        
                        // Path to store the uploaded image
                        $uploadPath = $uploadDir . $uniqueFileName;
                        
                        // Move the uploaded file to the specified directory
                        if(move_uploaded_file($fileTmpName, $uploadPath)) {
                            // Insert into database
                            $db = "INSERT INTO posts (caption, image, created_at) VALUES (:caption, :image, NOW())";
                            $stm = $pdo->prepare($db);
                            $stm->bindValue(':caption', $_POST['caption']);
                            $stm->bindValue(':image', $uploadPath); // Save the path to the image in the database
                            $stm->execute();
                            echo "Submit succeed !";
                        } else {
                            echo "File upload failed!";
                        }
                    } else {
                        echo "Invalid file extension! Only JPG, JPEG, PNG, and GIF files are allowed.";
                    }
                } else {
                    echo "No file uploaded!";
                }
            } catch (PDOException $error) {
                echo "Connect to DB error: $error";
            }
        }

        if (!isset($_POST['submit-question'])) {
        } else {
            try {
                $db = "INSERT INTO questions (question_text) VALUES (:question_text)";
                $stm = $pdo->prepare($db);
                $stm->bindValue(':question_text', $_POST['question_text']);
                $stm->execute();
                header("../Question/Question.html.php");
                exit;
            } catch (PDOException $error) {
                echo "Connect to DB error: $error";
            }
        }
    }
?>
