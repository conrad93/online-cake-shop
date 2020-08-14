<?php
session_start();
unset($_SESSION['user_admin_id']);
unset($_SESSION['user_admin_username']);
header("Location: index.php");
?>