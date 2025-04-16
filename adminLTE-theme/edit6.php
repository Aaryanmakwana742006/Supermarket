<?php
$connection = mysqli_connect("localhost","root","","apdb");
$id=$_GET['eid'];

$selectq=mysqli_query($connection,"select * from tbl_category where category_id='{$id}'");
$row=mysqli_fetch_array($selectq);

if($_POST)
{
    $id=$_POST['txt1'];
    $name=$_POST['txt2'];
    $uq=mysqli_query($connection,"Update tbl_category set catgory_id='{$id}',category_name='{$name}' where category_id='{$id}'");
    if($uq){
        echo"<script>alert('Record Updated')window location='category.php'</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
        Category ID:<input type="text" value="<?php echo $row['category_id']?>" name="txt1" placeholder="Enter Category ID" required />
        <br>
        Category Name:<input type="text" value="<?php echo $row['category_name']?>" name="txt2" placeholder="Enter Category Name" required />
        <input type="submit"value="Update" />
        </form>
    </body>
</html>