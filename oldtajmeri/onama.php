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
                    <li class="active">
                        <a href="onama.php">
                            <strong>O nama</strong>
                        </a>
                    </li>
                    <li>
                        <a href="ponuda.php">Ponuda</a>
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
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <center>
                                        <img src="img/deda.jpg" class="onamaslika"></img>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <p class="glavnitext">
                                        Te davne
                                        <i>
                                            <strong>1987.</strong>
                                        </i> godine, u dvorištu majstora
                                        <i>
                                            <strong>Pantelije Vujadinovića</strong>
                                        </i>, gde je on radio na svojim oldtajmerima, otvorena je radionica za popravku starih
                                        automobila. Osnivač, Pantelija, važio je za najstručnijeg automehaničara za oldtajmere
                                        u celom Beogradu. Ljudi sa celog Balkana su dovozili svoje oldtajmere kod njega,
                                        a, kako je posao počeo da cveta, Pantelija je počeo da zapošljava stručnjake - mehaničare
                                        najrazličitijih specijalizacija. Kako je obim posla rastao, njegovo dvorište je postalo
                                        premalo i nije se moglo efikasno izaći u susret svim mušterijama. Tada je Pantelija
                                        odlučio da kupi imanje u Ulici polovnih automobila, gde se auto servis i danas nalazi.
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
                <div class="xs-hidden sm-hidden col-md-1 col-lg-1">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <center>
                                        <img src="img/radionica.jpg" class="onamaslika"></img>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <p class="glavnitext">
                                        Između
                                        <strong>
                                            <i>1992. i 1995.</i>
                                        </strong> godine, uprkos sankcijama, posao je cvetao. Auto-servis počinje da se bavi i kupoprodajom
                                        klasičnih automobila, čime prerasta u auto centar. Pantelija i njegove poslovođe
                                        su kao priliku na tržištu prepoznali mogućnost švercovana jeftinih, a kvalitetnih
                                        oldtajmera iz Bugarske i Rumunije. Dok je država propadala, imućni ljudi su se utrkivali
                                        ko će pre sebi da obezbedi oldtajmer. A marže su bile ogromne. Tada je auto-centar
                                        doživeo najveći rast i dobio naziv, jednostavno -
                                        <strong>
                                            <i>"Polovni Oldtajmeri"</i>
                                        </strong>.
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
                <div class="xs-hidden sm-hidden col-md-1 col-lg-1">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <center>
                                        <img src="img/salon.jpg" class="onamaslika"></img>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <center>
                        <table border=0 class="table-responsive onamatabela">
                            <tr>
                                <td>
                                    <p class="glavnitext">
                                        <strong>
                                            <i>2008.</i>
                                        </strong> godine su se stekli uslovi za modernizaciju, pa je auto-centar dobio današnji izgled.
                                        Postao je atraktivno mesto koje privlači kupce iz regiona, a i šire. Proširena je
                                        i radionica i opremljena najnovijom servisnom tehnologijom i opremom iz Nemačke.
                                        U poslednjih nekoliko godina, auto-centar "Polovni oldtajmeri" je
                                        <i>
                                            <strong>ubedljivi lider na tržištu Balkana</strong>
                                        </i> i veoma prepoznat među ljubiteljima klasičnih automobila.
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

</body>

</html>