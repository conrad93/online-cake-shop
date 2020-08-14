<?php
require_once('config.php');
$users_username = $_POST['users_username'];
$users_email = $_POST['users_email'];
$users_password = $_POST['users_password'];
$users_mobile = $_POST['users_mobile'];
$users_address = $_POST['users_address'];
$insert = "INSERT INTO cake_shop_users_registrations (users_username, users_email, users_password, users_mobile, users_address) values ('$users_username', '$users_email', '$users_password', '$users_mobile', '$users_address')";
$select = "SELECT * FROM cake_shop_users_registrations where users_username = '$users_username'";
$query = mysqli_query($conn, $select);
$res = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
	header("Location: register.php?register_msg=1");
}
else {
	mysqli_query($conn, $insert);
	header("Location: login_users.php");
}
?>