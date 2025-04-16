<?php
include './connection.php';
if (isset($_POST['btnsubmit'])) {
  $filename = $_FILES['file123']['name'];
  $filepath = $_FILES['file123']['tmp_name'];
  move_uploaded_file($filepath,"uploads/".$filename);
  $name = $_POST['txt1'];
  $price = $_POST['txt2'];
  $category = $_POST['txt3'];
  $details = $_POST['txt4'];
  $q = mysqli_query($connection,"insert into tbl_product(product_name,product_price,category_id,product_image,product_details)
  values('{$name}','{$price}','{$category}','{$filename}','{$details}')");
  if($q) {
    echo"<script>alert('Record Added');</script>";
  }
}
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name:<input type="text" name="txt1">
            <br>
            Price:<input type="text" name="txt2">
            <br>
            Category ID:<input type="text" name="txt3">
            <br>
            Details:<input type="text" name="txt4">
            <br>
            Photo:<input type="file" name="file123">
            <br>
            <input type="submit" name="btnsubmit">
        </form>
    </body>
</html>