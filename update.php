<?php
include './connection.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $qty = $_POST['qty'];

    $q = mysqli_query($connection, "UPDATE `tbl_cart` SET `product_qty`='{$qty}'  WHERE `cart_id`='{$id}'");
    if ($q) {
        echo "<script> headerlocation:'cart.php';alert('Record Added');</script>";
    }
}