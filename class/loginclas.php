<?php
require_once "dbconnection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $u_name = $_POST['username'];
    $u_pass = $_POST['password'];

    //echo "Data Received: Username - '$u_name', Password - '$u_pass'<br>";
    $sql = "SELECT * FROM users WHERE u_name = :username AND u_pass = :password";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $u_name);
        $stmt->bindParam(':password', $u_pass);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            $_SESSION['u_id'] = $user['u_id'];

            header("Location: ../index.php");
            exit;
        } else {
            echo "Invalid username or password!<br>";
        }
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage() . "<br>";
    }
}

$conn = null;
?>
