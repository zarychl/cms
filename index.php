<?php
    //header("Location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KPU w Krośnie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <script>
            var str = document.getElementById('searchField');

                function search(){
                    
                    
                    let stringFound;
                    
                    if(window.find){
                        //var container = document.getElementByClassName('container-fluid');
                        stringFound = window.find(str.value);
                        if(!stringFound){
                            stringFound = window.find(str.value, 0, 1);
                            while(window.find(str.value, 0, 1)) continue;
                        }
                    }
                    if(!stringFound) alert(str.value + " Brak wyników");
                    return;
                    
                }
        </script>
    </head>
    <body class="container-fluid">
        <div class="container-fluid">
            <div class="d-flex flex-row bg-primary text-light fw-bold fs-5">
                <div class="p-2 dropdown">
                    <button class="text-light fw-bold btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Studenci
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Kierunki studiów</a></li>
                        <li><a class="dropdown-item" href="#">E-student</a></li>
                        <li><a class="dropdown-item" href="#">USOSweb</a></li>
                        <li><a class="dropdown-item" href="#">Harmonogramy zajęć</a></li>
                        <li><a class="dropdown-item" href="#">Kalendarz akademicki</a></li>
                        <li><a class="dropdown-item" href="#">Stypendia</a></li>
                        <li><a class="dropdown-item" href="#">Zakwaterowanie</a></li>
                        <li><a class="dropdown-item" href="#">Opłaty za studia</a></li>
                        <li><a class="dropdown-item" href="#">Komunikat Rektora</a></li>
                        <li><a class="dropdown-item" href="#">Ubezpieczenie NNW</a></li>
                    </ul>
                </div>
                <div class="p-2">Pracownicy</div>
                <div class="p-2">Biblioteka</div>
                <div class="p-2">Poczta</div>
                <div class="p-2">Kontakt</div>
                <div class="p-2"><a style="color:black;" href="login.php">Logowanie</a></div>
            </div>
            <div class="d-flex flex-row mt-4">
                <img src="images/logo.png" style="width: auto; height: 50px;">
                <div class="p-2 dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Kandydaci
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item fw-bold" href="#">Rekrutacja</a></li>
                        <li><a class="dropdown-item" href="#">Kierunki studiów</a></li>
                        <li><a class="dropdown-item" href="#">Terminy rekrutacji</a></li>
                        <li><a class="dropdown-item" href="#">Opłaty</a></li>
                        <li><a class="dropdown-item" href="#">Elektroniczna rekrutacja</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Oferta kształcenia</a></li>
                        <li><a class="dropdown-item" href="#">Academia kursy języków</a></li>
                        <li><a class="dropdown-item" href="#">Studia podyplomowe</a></li>
                        <li><a class="dropdown-item" href="#">British Council</a></li>
                    </ul>
                </div>
                <div class="p-2 dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        Życie studenckie
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="#">Cztery kampusy</a></li>
                        <li><a class="dropdown-item" href="#">Organizacje studenckie</a></li>
                        <li><a class="dropdown-item" href="#">Domy studenckie</a></li>
                        <li><a class="dropdown-item" href="#">Ogłoszenia prywatne</a></li>
                        <li><a class="dropdown-item" href="#">Mapa</a></li>
                        <li><a class="dropdown-item" href="#">Krosno i okolice</a></li>
                    </ul>
                </div>
                <div class="p-2 dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                        Uczelnia
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <li><a class="dropdown-item fw-bold" href="#">Władze Uczelni</a></li>
                        <li><a class="dropdown-item" href="#">Rektor</a></li>
                        <li><a class="dropdown-item" href="#">Senat</a></li>
                        <li><a class="dropdown-item" href="#">Rada Uczelni</a></li>
                        <li><a class="dropdown-item" href="#">Konwent</a></li>
                        <li><a class="dropdown-item" href="#">Struktura Uczelni</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Dokumenty</a></li>
                        <li><a class="dropdown-item" href="#">Statut</a></li>
                        <li><a class="dropdown-item" href="#">Strategia KPU</a></li>
                        <li><a class="dropdown-item" href="#">Uchwały Senatu</a></li>
                    </ul>
                </div>
                <div class="p-2 dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                        Nauka
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                        <li><a class="dropdown-item fw-bold" href="#">Publikacje KPU</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Aktualne konkursy</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Projekty badawcze</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Działalność naukowa</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Koła naukowe</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Wydawnictwo Pigonianum</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Czasopismo Studio Pigoniania</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Czasopismo Herbalism</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Konferencja</a></li>
                    </ul>
                </div>
                <div class="p-2 dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                        Współpraca
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                        <li><a class="dropdown-item fw-bold" href="#">Szkoły i młodzież</a></li>
                        <li><a class="dropdown-item" href="#">Akademia Młodych</a></li>
                        <li><a class="dropdown-item" href="#">Dla Maturzystów</a></li>
                        <li><a class="dropdown-item" href="#">Olimpiady</a></li>
                        <li><a class="dropdown-item" href="#">Szkoły partnerskie</a></li>
                        <li><a class="dropdown-item" href="#">Wydarzenia dla szkół i młodzieży</a></li>
                    </ul>
                </div>
                <div class="p-2 dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                        Aktualności
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                        <li><a class="dropdown-item" href="#">Aktualności</a></li>
                        <li><a class="dropdown-item" href="#">TV PWSZ</a></li>
                        <li><a class="dropdown-item" href="#">Media o nas i my w mediach</a></li>
                        <li><a class="dropdown-item" href="#">Galeria</a></li>
                    </ul>
                </div>
                <!-- <div class="p-2">Kandydaci &#9662;</div> -->
                <!-- <div class="p-2">Życie studenckie &#9662;</div> -->
                <!-- <div class="p-2">Uczelnia &#9662;</div> -->
                <!-- <div class="p-2">Nauka &#9662;</div>
                <div class="p-2">Współpraca &#9662;</div>
                <div class="p-2">Aktualności &#9662;</div> -->

                <div id="box">

		<input type="text" value="Wpisz tekst" id="searchField" onfocus="if (this.value=='Wpisz tekst') this.value = ''" onfocusout="if(this.value=='') this.value='Wpisz tekst'">
		<input type="submit" value="Szukaj" onclick="search()" >

	</div>
            </div>
            
        </div>
        <div id="carouselIndicators" class="container-fluid mt-4 carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselIndicators" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselIndicators" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/big_banner/2.jpg" class="mx-auto d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/big_banner/1.jpg" class="mx-auto d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/big_banner/3.jpg" class="mx-auto d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/big_banner/4.jpg" class="mx-auto d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="mx-auto carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Next</span> -->
            </button>
        </div>
        <div class="row mt-4 justify-content-center">
                <div class="col-md-3 ms-5">
                    <img class="img-fluid mt-3" src="images/baner 1.jpg" >
                    <img class="img-fluid mt-3" src="images/baner 2.jpg" >
                    <img class="img-fluid mt-3" src="images/baner 3.png" >
                    <img class="img-fluid mt-3" src="images/baner 4.jpg" >
                    <img class="img-fluid mt-3" src="images/baner 5.jpeg" >
                </div>
                <div class="col-md-6">
                    <div class="h4 text-primary text-center">
                        Aktualności
                    </div>
                    <div class="row fs-5 justify-content-center mt-2">
                        <img class="col-md-2" src="images/1 - pandemia.jpg">
                        <div class="col-md-5">Duszpasterstwo Akademickie</div>
                    </div><div class="row fs-5 justify-content-center mt-2">
                        <img class="col-md-2" src="images/2 - rok szczepanika.jpg">
                        <div class="col-md-5">Międzynarodowy Dzień Osób Niepełnosprawnych</div>
                    </div>
                    <div class="row fs-5 justify-content-center mt-2">
                        <img class="col-md-2" src="images/3 - tydzień szczepień.png">
                        <div class="col-md-5">Informacja dotycząca stypendiów</div>
                    </div>
                    <div class="row fs-5 justify-content-center mt-2">
                        <img class="col-md-2" src="images/4 - rusza 5 edycja.jpg" >
                        <div class="col-md-5">Katarzyna Studnicka w plebiscycie na najlepszego nauczyciela 2021 roku</div>
                    </div>
                </div>
        </div>
        <div class="row mt-5 bg-light">
            <div class="col-md-3 ms-5">
                <h4>Państwowa Uczelnia w Krośnie</h4>
                <p>Rynek 1</p>
                <p>38-400 Krosno</p>
                <p>NIP 684-21-75-051</p> 
            </div>
            <div class="col-md-3 ms-5">
                <h4>Biuro Rektora</h4>
                <p>tel. 13-43-755-00</p>
                <p>fax 13-43-755-11</p>
                <p>e-mail: kpu@kpu.krosno.pl</p> 
            </div>
            <div class="col-md-3 ms-5">
                <h4>KPU w sieci!</h4>
                <img class="col-md-4" src="images/ikona kontakt - facebook.png"> 
                <img class="col-md-4" src="images/ikona - instagram.png"> 
                <img class="col-md-4" src="images/ikona - youtube.png"> 
            </div>
        </div>
        <script src="bootstrap/bootstrap.bundle.min.js"></script>
    </body>
   
</html>