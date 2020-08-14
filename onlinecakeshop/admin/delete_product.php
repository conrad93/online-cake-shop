<?php
$prod_id = $_GET['prod_id'];
require_once('../config.php');
$delete = "DELETE FROM cake_shop_product where product_id = $prod_id";
mysqli_query($conn, $delete);
header("Location: view_product.php");
?>