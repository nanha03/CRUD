<div class="contaner">
    <div class="col-5 m-auto p-2">
        <div>
            <a href="index.php" class="btn btn-dark border border-primary m-3 mx-auto">
                <h6>Back</h6>
            </a>
        </div>
        <div class="border border-dark p-3 m-2 rounded shadow-lg">

            <h3 class="text-center">Create Product</h3>

            <form action="components/server.php" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text" name="product_name" id="product_name" placeholder="Product Name"
                        class="form-control m-2" required>
                </div>
                <div>
                    <input type="file" name="product_image" id="product_image" placeholder="Product Image"
                        class="form-control m-2" required accept="image/*">
                </div>
                <div>
                    <input type="text" name="product_quantity" id="product_quantity" placeholder="Product Quantity"
                        class="form-control m-2" required>
                </div>
                <div>
                    <input type="text" name="product_price" id="product_price" placeholder="Product Price"
                        class="form-control m-2 mb-4" required>
                </div>
                <button name="create_product" class="btn form-control bg-dark text-white">Submit</button>
            </form>
        </div>
    </div>