<?php
session_start();
require 'db_connection.php';

$name = $_POST['name'];
$admin_id = $_SESSION['admin_id'];

// Default empty image path
$image_path = '';

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $targetDir = "uploads/bike_model/";

    // Create folder if not exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $filename = time() . "_" . basename($_FILES['image']['name']);
    $targetFilePath = $targetDir . $filename;

    // Move uploaded file
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        $image_path = $targetFilePath;
    }
}



// Insert into `bike_model` table
$stmt = $pdo->prepare("INSERT INTO bike_models (model_name, image_path, admin_id) VALUES (?, ?, ?)");
$stmt->execute([$name, $image_path, $admin_id]);

header("Location: admin_panel.php?msg=bike_model_added");
exit;

?>
