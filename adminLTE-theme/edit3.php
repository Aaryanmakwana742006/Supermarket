<?php
$connection = mysqli_connect("localhost","root","","apdb");
$id=$_GET['eid'];

$selectq=mysqli_query($connection,"select * from tbl_product where product_id='{$id}'");
$data=mysqli_fetch_array($selectq);

if($_POST)
{
    $id=$_POST['txt1'];
    $name=$_POST['txt2'];
    $productprice=$_POST['txt3'];
    $categoryid=$_POST['txt4'];
    $image=$_POST['txt5'];
    $details=$_POST['txt6'];
    $uq=mysqli_query($connection,"Update tbl_product set product_id='{$id}',product_name='{$name}',
    product_price='{$productprice}',category_id='{$categoryid}',product_image='{$image}',product_details='{$details}' where product_id='{$id}'");
    if($uq){
        echo"<script>alert('Record Updated')window location='viewproduct.php'</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
        Product ID:<input type="text" value="<?php echo $data['product_id']?>"name="txt1" placeholder="Enter Product ID" required />
        <br>
        Product Name:<input type="text" value="<?php echo $data['product_name']?>"name="txt2"placeholder="Enter Product Name" required />
        <br>
        Product Price:<input type="text" value="<?php echo $data['product_price']?>"name="txt3"placeholder="Enter Product Price" required />
        <br>
        Category ID:<input type="text" value="<?php echo $data['category_id']?>"name="txt4"placeholder="Enter Category ID" required />
        <br>
        Product Image:<input type="text" value="<?php echo $data['product_image']?>"name="txt5"placeholder="Enter Product Image" required />
        <br>
        Product Details:<input type="text" value="<?php echo $data['product_details']?>"name="txt6"placeholder="Enter Product Details" required />
        <input type="submit"value="Update" />
        </form>
    </body>
</html>