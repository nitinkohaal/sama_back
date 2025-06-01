<?php
session_start();
require 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // First, delete associated images
    $stmt = $pdo->prepare("DELETE FROM apparel_images WHERE apparel_id = ?");
    $stmt->execute([$id]);

    // Then, delete the accessory
    $stmt = $pdo->prepare("DELETE FROM apparel WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: admin_panel.php?msg=deleted");
    exit;
} else {
    echo "Invalid request.";
}

?>
