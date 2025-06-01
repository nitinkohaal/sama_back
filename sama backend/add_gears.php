<?php
session_start();



require 'db_connection.php';

$name = $_POST['name'];
$sub_heading = $_POST['sub_heading'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$admin_id = $_SESSION['admin_id']; // Ensure session has admin ID

// 1. Insert into gears table
$stmt = $pdo->prepare("INSERT INTO gears (name, sub_heading, description, price, stock, admin_id)
                       VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$name, $sub_heading, $description, $price, $stock, $admin_id]);

$accessory_id = $pdo->lastInsertId();

// 2. Handle image uploads
$targetDir = "uploads/gears/";

// Create uploads/gears folder if not exists
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Now loop through uploaded images
foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
    $filename = basename($_FILES['images']['name'][$key]);
    $targetFilePath = $targetDir . time() . "_" . $filename;

    if (move_uploaded_file($tmpName, $targetFilePath)) {
        $stmt = $pdo->prepare("INSERT INTO gears_images (gear_id, image_path) VALUES (?, ?)");
        $stmt->execute([$accessory_id, $targetFilePath]);
    }
}


header("Location: admin_panel.php?msg=gears_added");
exit;
?>
