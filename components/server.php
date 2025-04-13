<?php
include '../db.php';
if (isset($_POST['create_product'])) {
    $product_name = $_POST['product_name'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO products (product_name, product_quantity, product_price, product_image) VALUES ('$product_name', '$product_quantity', '$product_price', '$product_image')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Product created successfully!');</script>";
        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Error creating product: " . mysqli_error($con) . "');</script>";
    }
} else if (isset($_POST['update_product'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $old_image = $_POST['old_image'];
    if ($_FILES['product_image']['name'] != "") {
        $product_image = $_FILES['product_image']['name'];  
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
    } else {
        $product_image = $old_image;
    }
    
    
    $sql = "UPDATE products 
    SET product_name = '$product_name', 
        product_quantity = '$product_quantity', 
        product_price = '$product_price', 
        product_image = '$product_image' 
    WHERE product_id = $product_id";


    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Product created successfully!');</script>";
        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Error creating product: " . mysqli_error($con) . "');</script>";
    }

}
?>