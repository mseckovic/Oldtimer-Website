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
  
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
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
          <li class="active">
            <a href="ponuda.php">
              <strong>Ponuda</strong>
            </a>
          </li>
          <li>
            <a href="kontakt.php">Kontakt</a>
          </li>
          <li>
             <a href="prodavnica.php">Prodavnica</a>
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
    </div>
  </section>
  <div class="container-fluid" id="malibaner">
    <div class="row">
      <strong>Svakog radnog dana radimo od 8:00 do 20:00! Vikendom od 8:00 do 16:00!</strong>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="wrapper marginicatop">
          <div id="quad">
            <figure>
              <img src="img/galerija/Alfa Romeo 8C 233 Zagato Spyder.JPG" alt="Alfa Romeo 8C 233 Zagato Spyder" />
              <figcaption>Alfa Romeo 8C 233 Zagato Spyder</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Alfa Romeo 1750 GS Figoni & Falaschi.jpg" alt="Alfa Romeo 1750 GS Figoni & Falaschi" />
              <figcaption>Alfa Romeo 1750 GS Figoni & Falaschi</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Alfa Roume Touring Superleggera Disco Volante Spyder.jpg" alt="Alfa Roume Touring Superleggera Disco Volante Spyder"
              />
              <figcaption>Alfa Roume Touring Superleggera Disco Volante Spyder</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Aston Martin DB2 Prototype UMC 272.JPG" alt="Aston Martin DB2 Prototype UMC 272" />
              <figcaption>Aston Martin DB2 Prototype UMC 272</figcaption>
            </figure>
          </div>
          <div id="quad">
            <figure>
              <img src="img/galerija/Aston Martin DB4 Zagato.jpg" alt="Aston Martin DB4 Zagato" />
              <figcaption>Aston Martin DB4 Zagato</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Aston Martin Ulster Competition.jpg" alt="Aston Martin Ulster Competition" />
              <figcaption>Aston Martin Ulster Competition</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Bentley Speed Six Old No 2.jpg" alt="Bentley Speed Six Old No 2" />
              <figcaption>Bentley Speed Six Old No 2</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Bentley Speed Six Saoutchik Drophead.jpg" alt="Bentley Speed Six Saoutchik Drophead" />
              <figcaption>Bentley Speed Six Saoutchik Drophead</figcaption>
            </figure>
          </div>
          <div id="quad">
            <figure>
              <img src="img/galerija/Ferrari 250 GT SWB Berlinetta Competizione.jpg" alt="Ferrari 250 GT SWB Berlinetta Competizione" />
              <figcaption>Ferrari 250 GT SWB Berlinetta Competizione</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Ferrari 250 GTO ex-Graham Hill.jpg" alt="Ferrari 250 GTO ex-Graham Hill" />
              <figcaption>Ferrari 250 GTO ex-Graham Hill</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Ferrari 288 GTO Evoluzione.jpg" alt="Ferrari 288 GTO Evoluzione" />
              <figcaption>Ferrari 288 GTO Evoluzione</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Ferrari Testarossa Spider Valeo.jpg" alt="Ferrari Testarossa Spider Valeo" />
              <figcaption>Ferrari Testarossa Spider Valeo</figcaption>
            </figure>
          </div>
          <div id="quad">
            <figure>
              <img src="img/galerija/Hispano Suiza K6 Brandone Cabriolet.jpg" alt="Hispano Suiza K6 Brandone Cabriolet" />
              <figcaption>Hispano Suiza K6 Brandone Cabriolet</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Hispano-Suiza H6C Dubonnet Xenia.jpg" alt="Hispano-Suiza H6C Dubonnet Xenia" />
              <figcaption>Hispano-Suiza H6C Dubonnet Xenia</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Jaguar E-type Lightweight.JPG" alt="Jaguar E-type Lightweight" />
              <figcaption>Jaguar E-type Lightweight</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Lamborghini Countach.jpg" alt="Lamborghini Countach" />
              <figcaption>Lamborghini Countach</figcaption>
            </figure>
          </div>
          <div id="quad">
            <figure>
              <img src="img/galerija/Packard Twelve Dietrich Stationary Coupe.jpg" alt="Packard Twelve Dietrich Stationary Coupe" />
              <figcaption>Packard Twelve Dietrich Stationary Coupe</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Peugeot Oxia Prototype.jpg" alt="Peugeot Oxia Prototype" />
              <figcaption>Peugeot Oxia Prototype</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Rolls-Royce Phantom III Thrupp & Mabeley.jpg" alt="Rolls-Royce Phantom III Thrupp & Mabeley" />
              <figcaption>Rolls-Royce Phantom III Thrupp & Mabeley</figcaption>
            </figure>
            <figure>
              <img src="img/galerija/Talbot-Lago T150C-SS Pourtout Coupe.JPG" alt="Talbot-Lago T150C-SS Pourtout Coupe" />
              <figcaption>Talbot-Lago T150C-SS Pourtout Coupe</figcaption>
            </figure>
          </div>
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
  <script>
    var quadimages = document.querySelectorAll("#quad figure");
    for (i = 0; i < quadimages.length; i++) {
      quadimages[i].addEventListener('click', function () { this.classList.toggle("expanded"); quad.classList.toggle("full") });
    }
  </script>
</body>

</html>