<?php
$connection = mysqli_connect("localhost","root","","apdb");
$id=$_GET['eid'];

$selectq=mysqli_query($connection,"select * from tbl_order_details where order_details_id='{$id}'");
$row=mysqli_fetch_array($selectq);

if($_POST)
{
    $id=$_POST['txt1'];
    $orderid=$_POST['txt2'];
    $productid=$_POST['txt3'];
    $qty=$_POST['txt4'];
    $price=$_POST['txt5'];
    $uq=mysqli_query($connection,"Update tbl_order_details set order_details_id='{$id}',order_id='{$orderid}',
    product_id='{$productid}',product_qty='{$qty}',product_price='{$price}' where order_id='{$id}'");
    if($uq){
        echo"<script>alert('Record Updated')window location='details.php'</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
        Order Details ID:<input type="text" value="<?php echo $row['order_details_id']?>"name="txt1" placeholder="Enter Order Details ID" required />
        <br>
        Order ID:<input type="text" value="<?php echo $row['order_id']?>"name="txt2"placeholder="Enter Order ID" required />
        <br>
        Product ID:<input type="text" value="<?php echo $row['product_id']?>"name="txt3"placeholder="Enter Product ID" required />
        <br>
        Product QTY:<input type="text" value="<?php echo $row['product_qty']?>"name="txt4"placeholder="Enter Product QTY" required />
        <br>
        Product Price:<input type="text" value="<?php echo $row['product_price']?>"name="txt5"placeholder="Enter Product Price" required />
        <input type="submit"value="Update" />
        </form>
    </body>
</html>