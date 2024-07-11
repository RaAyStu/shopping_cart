<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <!--css file -->
    <link rel="stylesheet" href="css/style.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- include header -->
     <?php include('header.php')?>
    

<!-- form section -->
 <div class="container">
    <section>
        <h3 class="heading">Add Products</h3>
        <form action=""class="add_product">
            <input type="text" placeholder="Enter product name" class="inpute_fields" required>
            <input type="number" placeholder="Enter product price" class="inpute_fields" required>
            <input type="file"  class="inpute_fields" required>
            <input type="submit" class="submit_btn" value="Add Product">





        </form>
</section>
</div>
    <!--js file -->
    <script scr="js/script.js"></script>
</body>
</html> 