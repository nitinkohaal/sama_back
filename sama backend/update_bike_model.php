<?php
require 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$image_path = '';

// Handle new image if uploaded
if (!empty($_FILES['image']['name'])) {
  $targetDir = "uploads/bike_model/";
  if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

  $filename = time() . "_" . basename($_FILES['image']['name']);
  $targetFilePath = $targetDir . $filename;

  if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
    $image_path = $targetFilePath;
  }
}



try {
  if ($image_path) {
    $stmt = $pdo->prepare("UPDATE bike_models SET model_name = ?, image_path = ? WHERE id = ?");
    $stmt->execute([$name, $image_path, $id]);
    header("Location: admin_panel.php?msg=bike_model_updated");
    exit;
  } else {
    $stmt = $pdo->prepare("UPDATE bike_models SET model_name = ? WHERE id = ?");
    $stmt->execute([$name, $id]);
    header("Location: admin_panel.php?msg=bike_model_updated");
    exit;

  }

} catch (Exception $e) {
  echo "error: " . $e->getMessage();
}
