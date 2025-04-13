<?php
 if ($con->query("DELETE FROM products WHERE product_id = $product_id")) {
    header("Location: index.php");
    exit();
} else {
    echo "Delete failed.";
}
?>