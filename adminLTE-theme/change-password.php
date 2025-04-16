<?php
session_start();
$connection = mysqli_connect("localhost","root","","apdb");
if(!isset($_SESSION['id'])){
    // header("location:forgot-password.php");
 }
 if($_POST){
     $opass = $_POST['opass'];
     $npass = $_POST['npass'];
     $cpass = $_POST['cpass'];
     $uid = $_SESSION['id'];
     $oldpassq = mysqli_query($connection,"select * from tbl_user where user_id='{$uid}'");
     $oldpassq = mysqli_fetch_array($oldpassq);
     if($oldpassdata['user_password']==$opass){
         if($npass==$cpass){
             // Update
             $uq = mysqli_query($connection,"update tbl_user set user_password='{$npass}'where user_id='{$uid}'");
             if($uq){
                 echo"<script>alert('Password Changed')</script>";
             }
         }else{
             echo"<script>alert('New and Comfirm Password not Match')</script>";
         }
         }else{
             echo"<script>alert('Old Password Not Match');</script>";
         }
     }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
            Old Password : <input type="text" name="opass">
            <br>
            New Password : <input type="text" name="npass">
            <br>
            Confirm Password : <input type="text" name="cpass">
            <br>
            <input type="submit">
        </form>
            </div>

          </div>

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>