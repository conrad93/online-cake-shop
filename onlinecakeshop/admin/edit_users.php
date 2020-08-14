<?php
require_once('../config.php');
$users_username = $_POST['users_username'];
$users_email = $_POST['users_email'];
$users_password = $_POST['users_password'];
$users_mobile = $_POST['users_mobile'];
$users_address = $_POST['users_address'];
$hidden_id = $_POST['hidden_users'];
$update = "UPDATE cake_shop_users_registrations SET users_username = '$users_username', users_email = '$users_email', users_password = '$users_password', users_mobile = '$users_mobile', users_address = '$users_address' where users_id = $hidden_id";
mysqli_query($conn, $update);
header('Location: view_users.php?edit_msg=1');
?>