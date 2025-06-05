<?php

session_start();
require 'db_connection.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}


$id = $_POST['accessory_id'];
$accessory_name = $_POST['accessory_name'];
$bike_model_id = $_POST['accessory_bike_model'];

echo '<pre>';
print_r($_POST);
echo '</pre>';


$stmt = $pdo->prepare("UPDATE accessories SET name = ?, bike_model_id = ? WHERE id = ?");

if ($stmt->execute([$accessory_name, $bike_model_id, $id])) {
    header('Location: admin_panel.php?msg=updated_accessories');
    exit;
}else {
    echo "Error: " . $stmt->errorInfo()[2];
    exit;
}



die();



?>