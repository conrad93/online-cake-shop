<?php
require_once('../config.php');
$category_name = $_POST['category_name'];
$file_name = $_FILES['category_image']['name'];
if ($file_name != "") {
	$f_name = Date('ymdhis');
    $file_array = explode('.', $file_name);
    $ext = $file_array[count($file_array) - 1];
    $new_file_name = $f_name.'.'.$ext;
    $destination = "../uploads/".$new_file_name;
    $source = $_FILES['category_image']['tmp_name'];
    move_uploaded_file($source, $destination);
    $insert = "INSERT INTO cake_shop_category (category_name, category_image) values ('$category_name', '$new_file_name')";
    mysqli_query($conn, $insert);
    header('Location: add_category.php?add_msg=1');
}
elseif ($file_name == "") {
	$default = "default-image.jpg";
	$insert = "INSERT INTO cake_shop_category (category_name, category_image) values ('$category_name', '$default')";
	mysqli_query($conn, $insert);
    header('Location: add_category.php?add_msg=1');
}
?>