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
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS -->
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
                    <li class="active">
                        <a href="kontakt.php">
                            <strong>Kontakt</strong>
                        </a>
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
        <div class="container-fluid kontisdizajn">
            <div class="row marginagoredole">
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 turbobojica">
                </div>
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
            </div>
            <div class="row marginagoredole">
                <div class="xs-hidden sm-hidden col-md-1 col-lg-1">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <div class="mapa">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.7345901627173!2d20.26132631544707!3d44.78621597909865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQ3JzEwLjQiTiAyMMKwMTUnNDguNyJF!5e0!3m2!1ssr!2srs!4v1504141033628"
                                            width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <p class="glavnitext">
                                        <center>
                                            <h1>
                                                <strong>Polovni Oldtajmeri</strong>
                                            </h1>
                                            <br>
                                            <p>Ulica polovnih oldtajmera bb
                                                <br> 11271 Surcin
                                                <br> Beograd, Srbija</p>
                                            <br>
                                            <p>
                                                <strong>
                                                    <h3>+381 11 1234567</h3>
                                                </strong>
                                            </p>
                                            <p>
                                                <a href="mailto:milos.seckovic.16@singimail.rs">
                                                    <h3>E-mail</h3>
                                                </a>
                                            </p>
                                            <br>
                                            <img src="img/Instagram.png" id="instagram"></img>
                                            <h4>
                                                <strong>@polovniodtajmeri</strong>
                                            </h4>
                                        </center>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
                <div class="xs-hidden sm-hidden col-md-1 col-lg-1">
                </div>
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
    <script src="js/bootstrap.js"></script>
</body>

</html>