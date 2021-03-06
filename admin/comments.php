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
<title>WebScrum | Komentarze</title>
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
                Komentarze
            </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-striped">
<thead>
<tr>
<th style="width: 10px">#</th>
<th style="width: 205px;">Data dodania</th>
<th>Użytkownik</th>
<th>Dot. artykułu</th>
<th>Treść</th>
</tr>
</thead>
<tbody>
<?php
$comments = getAllComments(); 
  foreach($comments as $c)
  {

  $a = getArticleTitleFromId($c['article_id']);
  $u = getUserInfo($c['user_id']);

  echo "
  <tr>
  <td> ".$c['id']."</td>
  <td>".$c['date']."</td>
  <td><a href='profile.php?userid=". $u['id'] ."'>".$u['name']." (ID: " . $u['id'] . ")</a></td>
  <td><a href='disparticle.php?articleid=". $c['article_id'] ."'>".$a." (ID: " . $c['article_id'] . ")</a></td>
  <td>".$c['comment']."</td>
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