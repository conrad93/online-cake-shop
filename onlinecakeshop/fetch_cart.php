<?php
session_start();
$id = $_GET['id'];
if(empty($_SESSION['cart'])){
	$_SESSION['cart'][] = $id;
} else {
	if (!in_array($id, $_SESSION['cart'])) {
		$_SESSION['cart'][] = $id;
	}
}
echo json_encode($_SESSION['cart']);
?>
