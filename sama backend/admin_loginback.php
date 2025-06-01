<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        // Query with username and password both in WHERE clause (plain text comparison)
        $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ? AND password = ?");
        $stmt->execute([$username, $password]);
        $admin = $stmt->fetch();


        if ($admin) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_id'] = $admin['id'];
            header('Location: admin_panel.php');
            exit;
        } else {
            $_SESSION['login_error'] = 'Invalid username or password.';
        }
    } else {
        $_SESSION['login_error'] = 'Please enter username and password.';
    }
} else {
    $_SESSION['login_error'] = 'Invalid request method.';
}

header('Location: admin_login.php');
exit;
