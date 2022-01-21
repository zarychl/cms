<?php
    include_once("header.php");

    if(isUserLoggedIn())//sprawdzamy czy użytkownik jest zalogowany...
    {
        header("Location: /admin");//jeśli tak to przenosimy go do zaplecza
    }

    if(!empty($_POST['login']))//Jeśli są dane w metodzie POST
    {
        $isPasswordOk = checkPassword($_POST['login'], $_POST['password']);//sprawdamy czy podane hasło zgadza się z tym z bazy danych

        if($isPasswordOk == 1)//jeśli tak...
        {
            loginUser(getUserIdByMail($_POST['login']));//to logujemy użytkownika
            header("Location: admin/index.php");//i przenosimy go do zaplecza
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Logowanie - "Państwowa Wyższa Szkoła Zawodowa im. Stanisława Pigonia w Krośnie"</title>
	<link rel="stylesheet" href="style.css"/>


</head>

<script>
    function clearAll()
    {
        document.getElementById("login").value = "";
        document.getElementById("haslo").value = "";
    }
</script>
<body>
	
	<div id="containter">
		
		<a href="#"><img src="img/foto.png"></img></a>
		
		<div id="panelDolny">
			
			
			System CAS (Centralny System Autentykacji) umożliwia korzystanie z wielu usług po
			zalogowaniu się w jednym miejscu. Zalogowanie do CAS daje dostęp do systemu USOSweb
			(index elektroniczny) oraz portalu e-Student https://e-learning.pwsz.krosno.pl
			<br/><br/>
			Wprowadź swój indentyfikator sieciowy (adres e-mail) i hasło
			<br/><br/>
            <form action="login.php" method="post">
			<div id="interface">
                <?php 
                if(isset($isPasswordOk) && $isPasswordOk == 0)
                    echo '<h4 style="color:red;">Zła nazwa użytkownika i/lub hasło!</h4>';
                ?>
				<!-- LOGIN-->
				<input placeholder="Adres e-Mail" name="login" type="text" id="login"/>
				
				<!-- HASLO-->
				
				<br/>
				<input placeholder="Hasło" name="password" type="password" id="haslo" name="haslo"/>
				<br/>
				
				
				
				
				<!-- <input id="checkBox" name="remember" type="checkbox"/><i id="label">Zapamiętaj mnie</i> -->
				
				
				<br></br>
				<!-- BUTTON WYCZYŚĆ-->
				<input type="button" onclick="clearAll()" id="wyczysc" value="Wyczyść"/>
				<!-- BUTTON ZALOGUJ-->
				<input type="submit" id="zaloguj" value="Zaloguj"/>
                </form>
			
			</div>
			
		</div>

	</div>

</body>
</html>