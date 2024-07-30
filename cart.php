<?php include 'connect.php';



// Update query
if (isset($_POST['update_product_quantity'])) {
    $update_value = mysqli_real_escape_string($conn, $_POST['update_quantity']);
    $update_id = mysqli_real_escape_string($conn, $_POST['update_quantity_id']);

    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity=$update_value WHERE id=$update_id");
    if ($update_quantity_query) {
        header('Location: cart.php');
        exit();
    }
}

// Remove item from cart
if (isset($_GET['remove'])) {
    $remove_id = mysqli_real_escape_string($conn, $_GET['remove']);
    mysqli_query($conn, "DELETE FROM `cart` WHERE id=$remove_id");
    header('Location: cart.php');
    exit();
}

// Delete all items from cart
if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart`");
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page-Project</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
    <?php
ob_start(); // Start output buffering

$number = 100000;
echo $number; // Output: 100000

$format = number_format($number, 2);
echo $format; // Output: 100,000.00

ob_end_clean(); // Clean (discard) the output buffer
?>


        <section class="shopping_cart">
            <h1 class="heading">My Cart</h1>
            <?php
            $select_cart_products = mysqli_query($conn, "SELECT * FROM `cart`");
            $num = 1;
            $grand_total = 0;
            if (mysqli_num_rows($select_cart_products) > 0) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)) { ?>
                            <tr>
                                <td><?php echo $num ?></td>
                                <td><?php echo $fetch_cart_products['name'] ?></td>
                                <td><img src="images/<?php echo urlencode($fetch_cart_products['image']); ?>" alt=""></td>
                                <td><?php echo $fetch_cart_products['price'] ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $fetch_cart_products['id'] ?>" name="update_quantity_id">
                                        <div class="quantity_box">
                                            <input type="number" min="1" value="<?php echo $fetch_cart_products['quantity'] ?>" name="update_quantity">
                                            <input type="submit" class="update_quantity" value="Update" name="update_product_quantity">
                                        </div>
                                    </form>
                                </td>
                                <td>$<?php echo number_format($fetch_cart_products['price'] * $fetch_cart_products['quantity'], 2) ?></td>
                                <td>
                                    <a href="cart.php?remove=<?php echo $fetch_cart_products['id'] ?>" onclick="return confirm('Are you sure you want to delete this item')">
                                        <i class="fas fa-trash"></i> Remove
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $grand_total += ($fetch_cart_products['price'] * $fetch_cart_products['quantity']);
                            $num++;
                        } ?>
                    </tbody>
                </table>
                <?php
                if ($grand_total > 0) {
                    echo "<div class='table_bottom'>
                        <a href='shop_products.php' class='bottom_btn'>Continue Shopping</a>
                        <h3 class='bottom_btn'>Grand total: $<span>$grand_total</span></h3>
                        <a href='checkout.php' class='bottom_btn'>Proceed to checkout</a>
                    </div>";
                } else {
                    echo "<div class='empty_text'>Cart is empty</div>";
                }
            } else {
                echo "<div class='empty_text'>Cart is empty</div>";
            }
            ?>
            <a href="cart.php?delete_all" class="delete_all_btn">
                <i class="fas fa-trash"></i> Delete All
            </a>
        </section>
    </div>
</body>
</html>
