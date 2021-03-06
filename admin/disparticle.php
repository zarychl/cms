<?php 
include_once("content/head.php");
//header("Location: addarticle.php");
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
<title>WebScrum | Przeglądaj artykuły</title>
<div display: none; class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/iconG.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div  class="content-wrapper">
    <!-- Main content -->
    <section style="margin-top:10px;" class="content">
    <div class="row">
        <div class="col">
         <div class="card">
            <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-newspaper"></i>
                Przeglądaj artykuły
            </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-striped">
<thead>
<tr>
<th style="width: 10px">#</th>
<th style="width: 205px;">Data dodania</th>
<th>Tytuł</th>
</tr>
</thead>
<tbody>
<?php
$articles = getAllArticles(); 
  foreach($articles as $a)
  {
  echo "
  <tr class='clickable-row'>
  <td> ".$a['id']."</td>
  <td>".$a['date']."</td>
  <td>".$a['title']."</td>
  </tr>
  ";
  }
?>
</tbody>

</table>
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