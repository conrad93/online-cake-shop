<?php
require_once('../config.php');
$admin_username = $_POST['admin_username'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];
$admin_id = $_POST['hidden_admin_id'];
$update = "UPDATE cake_shop_admin_registrations set admin_username = '$admin_username', admin_email = '$admin_email', admin_password = '$admin_password' where admin_id = $admin_id";
mysqli_query($conn, $update);
header("Location: account_admin.php?edit_success=1")
?>