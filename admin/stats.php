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
            <h1 class="m-0">Statystyki witryny</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-eye"></i>
            Wyświetlenia
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
              <?php

              $v = getViewCount(); 
              foreach($v as $row)
              {
                //echo $row["name"];
              }
               ?>

<table class="table table-striped">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Strona</th>
<th>Adres</th>
<th>% wszystkich</th>
<th style="width: 40px"></th>
</tr>
</thead>
<tbody>
<?php

$i = 1;
$v = getViewCount(); 
foreach($v as $row)
{
  $procent = $row['views'] / getAllViewCount();
  $procent = round($procent, 2)*100;

  if($procent >= 50)
    $kolor = "bg-success";
  if($procent <50 && $procent > 25)
    $kolor = "bg-warning";
  if($procent <= 25)
    $kolor = "bg-danger";
echo "
<tr>
<td>$i.</td>
<td>" . $row['name'] . "</td>
<td><a href='" . $row['href'] . "'>" . $row['href'] . "</a></td>
<td>
  <div class='progress progress-xs'>
    <div class='progress-bar progress-bar-danger ". $kolor ."' style='width: ". $procent ."%'></div>
  </div>
</td>
<td><span class='badge ". $kolor ."'>". $procent ."%</span></td>
</tr>
";

$i++;
}
?>
</tbody>
</table>
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