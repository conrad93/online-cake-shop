<?php
$orders_detail_id = $_GET['orders_detail_id'];
require_once('../config.php');
$delete = "DELETE FROM cake_shop_orders_detail where orders_detail_id = $orders_detail_id";
mysqli_query($conn, $delete);
header("Location: view_orders.php");
?>