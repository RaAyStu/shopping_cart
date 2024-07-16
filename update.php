
<?php include 'conecct.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <!--css file -->
    <link rel="stylesheet" href="css/style.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="edit_container">
        <!-- php code -->
         <?php
         if (isset($_GET['edit'])){
            $edit_id=$_GET['edit'];
            //echo $edit_id;
            $edit_query=mysqli_query($conn,"Select * from `products` where id=$edit_id");
            if(mysqli_num_rows($edit_query)>0){
                $fetch_data=mysqli_fetch_assoc($edit_query);
                    $row=$fetch_data['price'];
                    echo $row;


                
                ?>
                  <!-- form -->
        <form action="" mrthod="post" enctype="multipart7form-data"
        class="update_product product_container_box">
            <img src="" alt="">
            <input type="hidden">
            <inpute type="text" class="input_fildes fildes" required>
                <inpute type="number" class="input_fildes fileds" required>
                    <inpute type="file" class="input_fildes fileds" required accept="image/png, image/jpg, image/jpeg">
                        <div class="btns">
                            <input type="submit" class="edit_btn">
                            <input type="reset" id="close_edit" value="Cancel" class="cancel_btn">

                        </div>

        </form>
<?php
            }
         }
        ?>
      
    </section>

</body>

</html>