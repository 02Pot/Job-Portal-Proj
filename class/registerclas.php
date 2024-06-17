<?php
    require_once "dbconnection.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $u_name = $_POST['username'];
        $u_pass = $_POST['password'];
        $u_email = $_POST['email'];
    
        $check_sql = "SELECT * FROM users WHERE u_name = :username";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bindParam(':username', $u_name);
        $check_stmt->execute();
    
        if ($check_stmt->rowCount() > 0) {
            echo "Username already exists!";
        } else {
            $insert_sql = "INSERT INTO users (u_name, u_pass, u_email) VALUES (:username, :password, :email)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bindParam(':username', $u_name);
            $insert_stmt->bindParam(':password', $u_pass);
            $insert_stmt->bindParam(':email', $u_email);
    
            try {
                $insert_stmt->execute();
                echo "Registration successful!";
                header("Location: ../index.php");
                exit;
            } catch (PDOException $e) {
                echo "Registration failed: " . $e->getMessage();
            }
        }
    }
    
    $conn = null;
?>