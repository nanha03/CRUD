<?php
include 'db.php';
include 'components/important.php';
include 'components/nav.php';

?>


<?php
if (isset($_GET['create_product'])) {
    include 'components/create.php';    
}else if(isset($_GET['Edit'])){
    $product_id = $_GET['Edit'];
    include 'components/edit.php';
}else if(isset($_GET['Delete'])){
    $product_id = $_GET['Delete'];
    include 'components/delete.php';
} else{
    include 'components/table.php';
}
?>
