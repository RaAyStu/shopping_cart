<?php
include 'connect.php';
if(isset($_POST['add_to_cart'])){
    $product_name=$_POST['$product_name'];
    $product_price=$_POST['$product_price'];
    $product_image=$_POST['$product_image'];
}





?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Products-Project</title>

    <!--css file -->
    <link rel="stylesheet" href="css/style.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <!-- header-->
     <?php include 'header.php' ?>

     <div class="container">
        <section class="products">
            <h1 class="heading">Lets Shop</h1>
            <form method="post" action="">
            <div class="edit_form">
                <img src="images/AirPods.png" alt="">
                <h3>AirPods</h3>
                <div class="price">Price:$700/-</div>
                <input type="hidden" name="product_name">
                <input type="hidden" name="product_price">
                <input type="hidden" name="product_image">
                <input type="submit" class="submit_btn cart_btn" value="Add to Cart" name="add_to_cart">
            </div>
           

        </section>
     </div>
</body>
</html>