<?php
require_once('../config.php');
$category_name = $_POST['category_name'];
$file_name = $_FILES['category_image']['name'];
$hidden_id = $_POST['hidden_category'];
if ($file_name != "") {
	$f_name = Date('ymdhis');
    $file_array = explode('.', $file_name);
    $ext = $file_array[count($file_array) - 1];
    $new_file_name = $f_name.'.'.$ext;
    $destination = "../uploads/".$new_file_name;
    $source = $_FILES['category_image']['tmp_name'];
    move_uploaded_file($source, $destination);
    $update = "UPDATE cake_shop_category SET category_name = '$category_name', category_image = '$new_file_name' where category_id = $hidden_id";
    mysqli_query($conn, $update);
    header('Location: view_category.php?edit_msg=1');
}
elseif ($file_name == "") {
	$update = "UPDATE cake_shop_category SET category_name = '$category_name' where category_id = $hidden_id";
    mysqli_query($conn, $update);
    header('Location: view_category.php?edit_msg=1');
}
?>