<?php 
include_once("content/head.php");
include_once("content/topmenu.php");
include_once("content/sidemenu.php");

if(@$_GET['logout'] == 1)
{
    logoutUser();//wylogowujemy użytkownika
}

if(!isUserLoggedIn())//sprawdzamy czy użytkownik jest zalogowany...
{
    echo "<script>window.location.replace('/');</script>";
    die();
}

$luser = getCurrentUserInfo();
?>

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/iconG.png" alt="Logo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Zaplecze</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section style="display:none" class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="ion ion-clipboard mr-1"></i>
            To Do List
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
              
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include_once("content/footer.php");
?>