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
<title>WebScrum | Twój profil</title>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/iconG.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section style="margin-top:10px;" class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
          <i class="fas fa-newspaper"></i>
            Twój profil
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
              <table>
                  <tr>
                      <td><span style="font-weight:bold;">Nazwa użytkownika:</span></td><td><?php echo $luser['name']; ?></td>
                  </tr>
                  <tr>
                      <td><span style="font-weight:bold;">Adres e-Mail:</span></td><td><?php echo $luser['email']; ?></td>
                  </tr>
                  <tr>
                      <td><span style="font-weight:bold;">Data rejestracji:</span></td><td>
                          <?php 
                          $date = date_create($luser['regDate']);
                          echo date_format($date, 'd.m.Y') . "r."; 
                          ?></td>
                  </tr>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button type="button" class="btn btn-warning"><i class="fas fa-wrench"></i> Edytuj</button>
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