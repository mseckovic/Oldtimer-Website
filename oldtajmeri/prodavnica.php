<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polovni Oldtajmeri</title>

    <!-- Icon-->
    <link rel="icon" href="img/ikonice/mehanika.png" /> 
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="header" style="position:absolute;top:0;left:0;right:0;bottom:0" id="blur">
    </div>
    <div class="header">
        <div class="container" id="kontis" style="position:relative">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
                    <a href="index.php">
                        <img src="img/oldtajmeri.png" border="0" alt="logo">
                        </img>
                    </a>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                    <a href="index.php">
                        <img src="img/logo2.png" border="0" alt="logo">
                        </img>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="onama.php">O nama</a>
                    </li>
                    <li>
                        <a href="ponuda.php">Ponuda</a>
                    </li>
                    <li>
                        <a href="kontakt.php">Kontakt</a>
                    </li>
                    <li class="active">
						<a href="prodavnica.php">
                            <strong>Prodavnica</strong></a>
                    </li>
                    <li>
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "<p style='text-align=center; padding-top: 15px;'> <b>Username: </b> ".$_SESSION['username']."<a href='logout.php' style='color: black; '>  Logout</a>";
                            }else{
                                echo "<a href='logovanje.html'>Kupujete</a>";
                            }    
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="jumbotron" id="malidzambo">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                    </div>
                    <div class="hidden-xs hidden-sm col-md-5 col-lg-4">
                        <img class="showcase-img" src="img/200.png" id="znacka"></img>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid" id="malibaner">
        <div class="row">
            <strong>Svakog radnog dana radimo od 8:00 do 20:00! Vikendom od 8:00 do 16:00!</strong>
        </div>
    </div>
    <section>
        <div class="container-fluid kontisdizajn">
            <div class="row marginagoredole">
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 turbobojica">
                </div>
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
            </div>
                <div class="xs-hidden sm-hidden col-md-1 col-lg-1">
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Alfa Romeo 1750 GS Figoni & Falaschi.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Alfa Romeo 1760 GS Figoni & Falaschi</h4>
                  <h5 class="text-center">ID: 1</h5>
                  <h5 class="text-center">Cena: 25.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 2 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Alfa Romeo 8C 233 Zagato Spyder.JPG" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Alfa Romeo 8C 233 Zagato Spyder</h4>
                  <h5 class="text-center">ID: 2</h5>
                  <h5 class="text-center">Cena: 35.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 3 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Aston Martin DB2 Prototype UMC 272.JPG" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Aston Martin DB2 Prototype UMC 272</h4>
                  <h5 class="text-center">ID: 3</h5>
                  <h5 class="text-center">Cena: 45.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 4 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Bentley Speed Six Old No 2.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Bentley Speed Six Old No 2</h4>
                  <h5 class="text-center">ID: 4</h5>
                  <h5 class="text-center">Cena: 55.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 5 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Ferrari 250 GT SWB Berlinetta Competizione.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Ferrari 250 GT SWB Berlinetta Competizione</h4>
                  <h5 class="text-center">ID: 5</h5>
                  <h5 class="text-center">Cena: 65.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 6 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Ferrari Testarossa Spider Valeo.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Ferrari Testarossa Spider Valeo</h4>
                  <h5 class="text-center">ID: 6</h5>
                  <h5 class="text-center">Cena: 75.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 7 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Jaguar E-type Lightweight.JPG" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Jaguar E-type Lightweight</h4>
                  <h5 class="text-center">ID: 7</h5>
                  <h5 class="text-center">Cena: 85.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 8 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Hispano-Suiza H6C Dubonnet Xenia.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Hispano-Suiza H6C Dubonnet Xenia</h4>
                  <h5 class="text-center">ID: 8</h5>
                  <h5 class="text-center">Cena: 95.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 9 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Lamborghini Countach.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Lamborghini Countach</h4>
                  <h5 class="text-center">ID: 9</h5>
                  <h5 class="text-center">Cena: 115.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 10 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Rolls-Royce Phantom III Thrupp & Mabeley.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Rolls-Royce Phantom III Thrupp & Mabeley</h4>
                  <h5 class="text-center">ID: 10</h5>
                  <h5 class="text-center">Cena: 80.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 11 -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Peugeot Oxia Prototype.jpg" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Peugeot Oxia Prototype</h4>
                  <h5 class="text-center">ID: 11</h5>
                  <h5 class="text-center">Cena: 95.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
                <!-- Product 12  -->
                <div class="col-md-4 product-grid">
                  <div class="image">
                    <a href="#">
                      <img src="img/galerija/Talbot-Lago T150C-SS Pourtout Coupe.JPG" class="w-100">
                    </a>
                  </div>
                  <h4 class="text-center">Talbot-Lago T150C-SS Pourtout Coupe</h4>
                  <h5 class="text-center">ID: 12</h5>
                  <h5 class="text-center">Cena: 150.000,00 &euro;</h5>
                  <a href="kupujete.html" class="btn buy">Kupi</a>
                </div>
                <!-- ./Product -->
        
              </div>

            <div class="row marginagoredole">
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 turbobojica">
                </div>
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid futer">
            <div class="row">
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="footertext">
                        Polovni Oldtajmeri
                        <br>
                        <br> Ulica polovnih oldtajmera bb
                        <br> 11070, Surcin
                        <br> Srbija
                    </p>
                </div>
                <div class="hidden-xs hidden-sm col-md-2 col-lg-2 futerlogokolona">
                    <center>
                        <img src="img/oldtajmeri.png" id="futerlogo"></img>
                    </center>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="footertext">
                        Ponedeljak - Petak
                        <br> 8:00 - 20:00
                        <br>
                        <br> Subotom i Nedeljom
                        <br> 8:00 - 16:00
                    </p>
                </div>
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
            </div>
        </div>
        <div class="container-fluid kopirajtfuter">
            <div class="row">
                © Milos Seckovic, 2018
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>