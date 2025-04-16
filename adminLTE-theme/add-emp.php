<?php
session_start();
require'./at_class.php';
if($_POST)
{
    $emp_name=$_POST['emp_name'];
    $emp_gender=$_POST['emp_gender'];
    $emp_mobile=$_POST['emp_mobile'];

    $q=mysqli_query($connection,"insert into tbl_employe(emp_name,emp_gender,emp_mobile)values('{$emp_name}','{$emp_gender}','{$emp_mobile}')") or die(mysqli_error($connection));
    if($q)
    {
        echo"<script>alert('Record Added')</script>";
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
<?php
include'./topmenu.php'
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php
include'./sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employe Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
                <h3 class="card-title">Employe Detailss</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="emp_name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" value="Male" name="emp_gender">
                          <label for="customRadio1" class="custom-control-label">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" value="Female" name="emp_gender">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="number" name="emp_mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
    <strong>Copyright & copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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