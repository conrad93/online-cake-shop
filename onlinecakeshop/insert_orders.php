<?php
require_once('config.php');
session_start();
if (isset($_SESSION['cart']) && $_SESSION['cart'] !== null) {
if (isset($_SESSION['user_users_id']) && $_SESSION['user_users_username'] !== null) {
	$username = $_SESSION['user_users_username'];
	$users_id = $_SESSION['user_users_id'];
	$product_name = $_POST['hidden_product_name'];
    $price = $_POST['hidden_product_price'];
    $quantity = $_POST['product_quantity'];
    $total = $_POST['hidden_product_total'];
    $total_amount = $_POST['hidden_total_amount'];
    $delivery_date = $_POST['delivery_date'];
    $payment_method = $_POST['payment_method'];
    $insert_orders = "INSERT INTO cake_shop_orders (users_id, delivery_date, payment_method, total_amount) values ('$users_id', '$delivery_date', '$payment_method', '$total_amount')";
    mysqli_query($conn, $insert_orders);
    $orders_id = mysqli_insert_id($conn);
    for ($i=0; $i < count($product_name); $i++) { 
    	$insert_orders_detail = "INSERT INTO cake_shop_orders_detail (orders_id, product_name, quantity) values ('$orders_id', '$product_name[$i]', '$quantity[$i]')";
    	mysqli_query($conn, $insert_orders_detail);
    }
    unset($_SESSION['cart']);
    header("Location: cart.php?order_success=1");
} else {
	echo "<script>
	alert('Please login!!!');
	location.assign('login_users.php');
	</script>";
}
} else {
	echo "<script>
	alert('Please select a product!!!');
	location.assign('cart.php');
	</script>";
}
?>