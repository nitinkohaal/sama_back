<?php 
session_start();
require 'db_connection.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM bike_models WHERE id = ?");
$stmt->execute([$id]);

header("Location: admin_panel.php?msg=bike_model_deleted");
exit;

?>