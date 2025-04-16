<?php
session_start();
include './connection.php';

if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}
if($_POST)
{
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $date = date('d-m-y');
    $status = "connfirm";
    $uid = $_SESSION['uid'];

    //shipping order
    $orderq = mysqli_query($connection,"insert into tbl_order_master
    (order_date,order_status,user_id,shipping_name,shipping_mobile,shipping_address,payment_mode)
    values('{$date}','{$status}','{$uid}','{$txt1}','{$txt2}','{$txt3}','{$txt4}')");
    //inserted record id
    $orderid = mysqli_insert_id($connection);
    //order details
    //fetch cart data
    $cartq = mysqli_query($connection,"select * from tbl_cart where user_id='{$uid}'");
    while($cartdata = mysqli_fetch_array($cartq))
    {
        //cart data
        $pid = $cartdata['product_id'];
        $qty = $cartdata['product_qty'];
        //product data
        $pq = mysqli_query($connection,"select * from tbl_product where product_id='{$pid}'");
        $pdata = mysqli_fetch_array($pq);
        $price = $pdata['product_price'];
        //order details add
        $orderdetailq = mysqli_query($connection,"insert into tbl_order_details(order_id,product_id,product_qty,product_price)
        values('{$orderid}','{$pid}','{$qty}','{$price}')");

        //cart remove
        mysqli_query($connection,"select * from tbl_cart where cart_id='{$cartdata['cart_id']}'");
    }
    header("location:thanks.php");
}
?>
<form method="post">
<h1>Shipping</h1>

Name:<input type="text" name="txt1" required > <br>
Mobile:<input type="text" name="txt2" required > <br>
Address:<textarea cols="21" name="txt3" required ></textarea>

<h2>Payment Mode</h2>
Cash:<input type="radio" name="txt4" value="Cash" required >Cash
<input type="radio" name="txt4" value="Online" required >Online
<br>
<img width="100" src="uploads/istockphoto-1347277582-612x612.jpg">
<br>
<input type="submit">
</form>