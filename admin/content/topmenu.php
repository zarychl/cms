<?php
$luser = getCurrentUserInfo();
?>
 
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i> Witaj, <?php echo $luser['name']; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Konto</span>
          <div class="dropdown-divider"></div>
          <a href="/admin/profile.php" class="dropdown-item">
            <i class="fas fa-address-card"></i> Profil
          </a>
          <a href="/admin/index.php?logout=1" class="dropdown-item">
            <i class="fas fa-door-open"></i> Wyloguj
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->