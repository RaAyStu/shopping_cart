<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "root");
define("DATABASE", "shopping_cart");


$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);


if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}



?>
