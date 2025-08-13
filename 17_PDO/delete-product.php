
<?php
include 'db.class.php';
include 'product.class.php';?>

<?php include('header.php')?>

<?php


    $product = new Products();


if(isset($_POST["deleteProduct"])){
    $id = $_POST["productId"];
    
    
    if($product->deleteProduct($id)){
        header('location: index.php');
    }
}


?>