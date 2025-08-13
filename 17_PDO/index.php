<?php
include 'db.class.php';
include 'product.class.php';?>

<?php 'create-product.php'; ?>
<?php 'delete-product.php';?>
<?php 'edit-product.php';?>
<?php include('header.php')?>

    <div class="container my-3">

    <a href="create-product.php" class="btn btn-primary">Create Product</a>

    <hr>
    <?php
    //nesne üretme
    $product = new Products(); ?> 
    <?php
    //echo "<pre>";
    // print_r($product->getProducts());
    //echo "<br>";
    //print_r($product->getProductById(2));

    if($product->getProducts()): ?>
       
        <?php include('product-list.php'); ?>

    <?php else:?>

        <?php include('no-product.php');?>

    <?php endif;?>
</div>
      <?php include('footer.php')?>