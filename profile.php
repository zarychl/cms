<h2>Twój profil:</h2><hr>
<?php
include_once("header.php");

if(@$_GET['logout'] == 1)
{
    logoutUser();//wylogowujemy użytkownika
}

if(!isUserLoggedIn())//sprawdzamy czy użytkownik jest zalogowany...
{
    header("Location: login.php");//jeśli nie to przenosimy go do strony logowania
}
print_r(getUserInfo($_SESSION['userId']));
?>
<br><br>
<a href="profile.php?logout=1">[WYLOGUJ]</a>
<br>