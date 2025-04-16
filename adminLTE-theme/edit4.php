<?php
$connection = mysqli_connect("localhost","root","","apdb");
$id=$_GET['eid'];

$selectq=mysqli_query($connection,"select * from tbl_cart where cart_id='{$id}'");
$data=mysqli_fetch_array($selectq);

if($_POST)
{
    $id=$_POST['txt1'];
    $productid=$_POST['txt2'];
    $qty=$_POST['txt3'];
    $userid=$_POST['txt4'];
    $uq=mysqli_query($connection,"Update tbl_product set cart_id='{$id}',product_id='{$productid}',
    product_qty='{$qty}',user_id='{$userid}' where product_id='{$id}'");
    if($uq){
        echo"<script>alert('Record Updated')window location='cart.php'</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
        Cart ID:<input type="text" value="<?php echo $data['cart_id']?>"name="txt1" placeholder="Enter Cart ID" required />
        <br>
        Product ID:<input type="text" value="<?php echo $data['product_id']?>"name="txt2"placeholder="Enter Product ID" required />
        <br>
        Product QTY:<input type="text" value="<?php echo $data['product_qty']?>"name="txt3"placeholder="Enter Product Qty" required />
        <br>
        User ID:<input type="text" value="<?php echo $data['user_id']?>"name="txt4"placeholder="Enter User ID" required />
        <input type="submit"value="Update" />
        </form>
    </body>
</html>