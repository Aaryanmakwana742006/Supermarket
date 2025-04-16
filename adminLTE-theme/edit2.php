<?php
$connection = mysqli_connect("localhost","root","","apdb");
$id=$_GET['eid'];

$selectq=mysqli_query($connection,"select * from tbl_order_master where order_id='{$id}'");
$row=mysqli_fetch_array($selectq);

if($_POST)
{
    $id=$_POST['txt1'];
    $date=$_POST['txt2'];
    $status=$_POST['txt3'];
    $userid=$_POST['txt4'];
    $name=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $payment=$_POST['txt8'];
    $uq=mysqli_query($connection,"Update tbl_order_master set order_id='{$id}',order_date='{$date}',order_status='{$status}',user_id='{$userid}',
    shipping_name='{$name}',shipping_mobile='{$mobile}',shipping_address='{$address}',payment_mode='{$payment}',where order_id='{$id}'");
    if($uq){
        echo"<script>alert('Record Updated')window location='master.php'</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
        Order ID:<input type="text" value="<?php echo $row['order_id']?>"name="txt1" placeholder="Enter Order ID" required />
        <br>
        Order Date:<input type="text" value="<?php echo $row['order_date']?>"name="txt2"placeholder="Enter Order Date" required />
        <br>
        Order Status:<input type="text" value="<?php echo $row['order_status']?>"name="txt3"placeholder="Enter Order Status" required />
        <br>
        User ID:<input type="text" value="<?php echo $row['user_id']?>"name="txt4"placeholder="Enter User ID" required />
        <br>
        Shipping Name:<input type="text" value="<?php echo $row['shipping_name']?>"name="txt5"placeholder="Enter Shipping Name" required />
        <br>
        Shipping Mobile:<input type="text" value="<?php echo $row['shipping_mobile']?>"name="txt6"placeholder="Enter Shipping Mobile" required />
        <br>
        Shipping Address:<input type="text" value="<?php echo $row['shipping_address']?>"name="txt7"placeholder="Enter Shipping Address" required />
        <br>
        Payment:<input type="text" value="<?php echo $row['payment_mode']?>"name="txt8"placeholder="Enter Payment" required />
        <input type="submit"value="Update" />
        </form>
    </body>
</html>