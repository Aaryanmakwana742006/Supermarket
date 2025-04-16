<?php
$connection = mysqli_connect("localhost","root","","apdb");
$id=$_GET['eid'];

$selectq=mysqli_query($connection,"select * from tbl_user where user_id='{$id}'");
$data=mysqli_fetch_array($selectq);

if($_POST)
{
    $id=$_POST['txt1'];
    $name=$_POST['txt2'];
    $email=$_POST['txt3'];
    $password=$_POST['txt4'];
    $uq=mysqli_query($connection,"Update tbl_product set user_id='{$id}',user_name='{$name}',
    user_email='{$email}',user_password='{$password}' where user_id='{$id}'");
    if($uq){
        echo"<script>alert('Record Updated')window location='user.php'</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
        User ID:<input type="text" value="<?php echo $data['user_id']?>"name="txt1" placeholder="Enter User ID" required />
        <br>
        User Name:<input type="text" value="<?php echo $data['user_name']?>"name="txt2"placeholder="Enter User Name" required />
        <br>
        User Email:<input type="text" value="<?php echo $data['user_email']?>"name="txt3"placeholder="Enter Email" required />
        <br>
        User Password:<input type="text" value="<?php echo $data['user_password']?>"name="txt4"placeholder="Enter User Password" required />
        <input type="submit"value="Update" />
        </form>
    </body>
</html>