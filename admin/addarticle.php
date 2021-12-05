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
<title>WebScrum | Dodaj artykuł</title>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/iconG.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section style="margin-top:10px;" class="content">
    <div class="row">
        <div class="col-sm-9">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-newspaper"></i>
                Dodaj artykuł
            </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <input placeholder="Dodaj tytuł..." type="text" class="form-control"/><br>
              <textarea placeholder="Treść..." class="form-control"></textarea>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <button type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Dodaj</button>
            </div>
        </div>
</div>

<div class="col-sm-3">
         <div class="card">
            <div class="card-header">
            <h4 class="card-title">
                Kategoria
            </h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="kat1">
                <label class="form-check-label" for="kat1">
                    Kategoria 1
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="kat2">
                <label class="form-check-label" for="kat2">
                    Kategoria 2
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="kat3">
                <label class="form-check-label" for="kat3">
                    Kategoria 3
                </label>
            </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            
            </div>
        </div>

        <div class="card">
            <div class="card-header">
            <h4 class="card-title">
                Ustawienia
            </h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            
            </div>
        </div>
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