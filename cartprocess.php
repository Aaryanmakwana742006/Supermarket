<?php
session_start();
include './connection.php';
$pid = $_POST['pid'];
$qty = $_POST['qty'];
$uid = $_SESSION['uid'];

//Login check
if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}
$q = mysqli_query($connection,"insert into tbl_cart(product_id,product_qty,user_id) values('{$pid}','{$qty}','{$uid}')");

header("location:cart.php");
?>