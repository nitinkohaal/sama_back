<?php
// load_products.php
session_start();
require 'db_connection.php';

$category = isset($_GET['category']) ? $_GET['category'] : 'all';

if ($category == 'accessories') {
  include 'show_acees_product.php';
} else if ($category == 'gears') {
  include 'show_gears_product.php';
} else if ($category == 'apparel') {
  include 'show_apparel_product.php';
} else {
  include 'show_acees_product.php';
}
?>
