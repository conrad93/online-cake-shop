<?php
require_once('config.php');
$users_username = $_POST['users_username'];
$users_password = $_POST['users_password'];
$select = "SELECT * FROM cake_shop_users_registrations where users_username = '$users_username' AND users_password = '$users_password'";
$query = mysqli_query($conn, $select);
$res = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
	session_start();
	$_SESSION['user_users_id'] = $res['users_id'];
	$_SESSION['user_users_username'] = $res['users_username'];
	header("Location: index.php?login_success=1");
} 
else {
	header("Location: login_users.php?login_error=1");
}
?>
