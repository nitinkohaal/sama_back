<?php
session_start();
require 'db_connection.php'; // Your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($admin_id, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        $_SESSION['admin_id'] = $admin_id;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>
