<?php
require_once('../config.php');
$product_name = $_POST['product_name'];
$product_category = $_POST['product_category'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];
if ($_FILES['product_image']['name'][0] != "") {
for ($i=0; $i < count($_FILES['product_image']['name']); $i++) { 
	$file_name = $_FILES['product_image']['name'][$i];
	$f_name = Date('ymdhis').$i;
	$file_array = explode('.', $file_name);
	$ext = $file_array[count($file_array) - 1];
	$new_file_name = $f_name.'.'.$ext;
	$source = $_FILES['product_image']['tmp_name'][$i];
	$destination = "../uploads/".$new_file_name;
	move_uploaded_file($source, $destination);
	if ($i == count($_FILES['product_image']['name']) - 1) {
		$upload_file_name .= $f_name.'.'.$ext;
	} else {	
		$upload_file_name .= $f_name.'.'.$ext.", ";
	}	
}
$insert = "INSERT INTO cake_shop_product (product_name, product_category, product_price, product_description, product_image) values ('$product_name', '$product_category', '$product_price', '$product_description', '$upload_file_name')";
mysqli_query($conn, $insert);
header("Location: add_product.php?add_msg=2");
} 
elseif ($_FILES['product_image']['name'][0] == "") {
	$default = "default-image.jpg";
	$insert = "INSERT INTO cake_shop_product (product_name, product_category, product_price, product_description, product_image) values ('$product_name', '$product_category', '$product_price', '$product_description', '$default')";
    mysqli_query($conn, $insert);
    header("Location: add_product.php?add_msg=2");
}
?>