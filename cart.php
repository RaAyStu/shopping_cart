<?php include 'connect.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page-Project</title>

    <!--css file -->
    <link rel="stylesheet" href="css/style.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!-- header-->
    <?php include 'header.php' ?>
    
    <div class="container">

        <section class="shopping_cart">
            <h1 class="heading">My Cart</h1>
            <table>
                <thead>
                    <th>S1 No</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                    <th></th>
                </thead>
            </table>
        </section>
    </div>

</body>

</html>