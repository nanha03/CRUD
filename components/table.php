<div class="container col-7">
    <div>
        <a href="?create_product" class="border border-primary btn btn-dark m-3 mx-auto">
            <h6>Create</h6>
        </a>
    </div>
    <table class="table border table-bordered table-sm text-center shadow-lg rounded background-striped">
        <thead>
            <tr>
                <th class="col-1" scope="col">Count</th>
                <th class="col-3" scope="col">Product</th>
                <th class="col-2" scope="col">Image</th>
                <th class="col-1" scope="col">Quantity</th>
                <th class="col-2" scope="col">Price</th>
                <th class="col-3" scope="col">Option</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $products = $con->query("SELECT * FROM products");
            $count = 1;
            foreach ($products as $product) {
                $name = $product['product_name'];
                $product_id = $product['product_id'];
                $image = $product['product_image'];
                $quantity = $product['product_quantity'];
                $price = $product['product_price'];
                echo "<tr><th scope='row'>$count</th>
                <th scope='row'>$name</th>
                <th scope='row'><img style='height: 80px;' src='img/".$image."'></th>
                <th scope='row'>$quantity</th>
                <th scope='row'>$price</th><th scope='row'><a href='?Edit=$product_id' class='btn btn-warning m-1'>Edit</a><a  href='?Delete=$product_id'  onclick=\"return confirm('Are you sure you want to delete this product?');\"  class='btn btn-danger m-1'>Delete</a></th></tr>";
                $count++;
                
            }
            ?>
        </tbody>
    </table>
</div>