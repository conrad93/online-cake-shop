<?php
$users_id = $_GET['users_id'];
require_once('../config.php');
$delete = "DELETE FROM cake_shop_users_registrations where users_id = $users_id";
mysqli_query($conn, $delete);
header("Location: view_users.php");
?>