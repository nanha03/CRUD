<?php
$product = $con->query("SELECT * FROM products WHERE product_id = $product_id");
if ($product && $product->num_rows > 0) {
    $row = $product->fetch_assoc();
    $product_name = $row['product_name'];
    $product_image = $row['product_image'];
    $product_quantity = $row['product_quantity'];
    $product_price = $row['product_price'];
} else {
    echo "<div class='alert alert-danger'>Product not found.</div>";
}
?>


<div class="contaner">
    <div class="col-5 m-auto p-2">
        <div>
            <a href="index.php" class="btn btn-dark border border-primary m-3 mx-auto">
                <h6>Back</h6>
            </a>
        </div>
        <div class="border border-dark p-3 m-2 rounded shadow-lg">

            <h3 class="text-center">Edit Product</h3>

            <form action="components/server.php" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text" name="product_name" id="product_name" placeholder="Product Name"
                        class="form-control m-2" value="<?php echo $product_name ?>" required>
                </div>
                <div class="mb-2">
                    <img src="img/<?php echo htmlspecialchars($product_image); ?>" alt="Current Product Image"
                        style="height: 100px; border: 1px solid #ccc; border-radius: 4px;">
                        <input type="file" name="product_image" id="product_image" class="form-control" accept="image/*">
                        <input type="hidden" name="old_image" value="<?php echo htmlspecialchars($product_image); ?>">
                </div>
                <div>
                    <input type="text" name="product_quantity" id="product_quantity" placeholder="Product Quantity" class="form-control m-2" value="<?php echo $product_quantity ?>" required>
                </div>
                <div>
                    <input type="text" name="product_price" id="product_price" placeholder="Product Price"
                        class="form-control m-2 mb-4" value="<?php echo $product_price?>" required>
                </div>
                <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                <button name="update_product" class="btn form-control bg-dark text-white">Submit</button>
            </form>
        </div>
    </div>