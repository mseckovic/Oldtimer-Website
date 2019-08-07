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
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">
					<a href="index.php">
						<img src="img/oldtajmeri.png" border="0" alt="logo">
						</img>
					</a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-2">
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
					<li class="active">
						<a href="index.php">
							<strong>Home</strong>
						</a>
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
	<section id="middle">
		<div class="container" id="glavnikontis">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="centrirantextfensi">
					<p>
						<h2>
							<center>
								<font color="#c66600">NAJVEĆA PONUDA OLDTAJMERA U SRBIJI</font>
							</center>
						</h2>
					</p>
					<br>
					<br>
					<p>Sa više od 30 godina tradicije i velikim iskustvom postali smo broj 1 auto centar u zemlji na tržištu oldtajmera. Specijalizovani
						smo za kupovinu i prodaju širokog spektra "klasika", ali posebno smo opredeljeni za:
						<font color="#c66600">MG</font>,
						<font color="#c66600">Triumph</font>,
						<font color="#c66600">Austin Healey</font>,
						<font color="#c66600">Jaguar</font>,
						<font color="#c66600">Porsche</font> i klasični
						<font color="#c66600">Ford Mustang</font>. Pored ovih brendova, u našem salonu često možete naći i unikatne modele ostalih brendova, kao
						što su:
						<font color="#c66600">Rolls Royce</font>,
						<font color="#c66600">Bentley</font>,
						<font color="#c66600">Buick</font>,
						<font color="#c66600">Cadillac</font>,
						<font color="#c66600">Alfa</font>,
						<font color="#c66600">Fiat</font>,
						<font color="#c66600">Volvo</font> i
						<font color="#c66600">Folkswagen</font>. Posetite naš salon u Beogradu!</p>
					<br>
					<p>Svaki oldtajmer je jedinstven i razlikuje se od ostalih. Dozvolite nam da Vam pomognemo da napravite najbolji izbor
						za Vas. Okolnosti, kao što su budžet, razdoblje života, porodica, tehničko znanje i želja da rade na svom oldtajmeru,
						razlikuju se od kupca do kupca. Čak i ako uopšte nemate tehničko znanje, možete se zabaviti sa dobro očuvanim oldtajmerom
						iz salona "Polovni Oldtajmeri".</p>
					<br>
					<p>Danas ni ne morate više raditi sami na Vašem oldtajmeru. Ipak, mi imamo automobile za restauriranje za entuzijaste koji
						bi želeli da samostalno obnove automobil. Mi Vam takođe možemo pomoći u projektu restauracije.</p>
					<br>
					<p>
						<h3>
							<center>KUPUJETE KLASIČAN AUTOMOBIL?</center>
						</h3>
					</p>
					<br>
					<p>Mi uvek imamo više od 250 klasičnih automobila na prodaju. Tražite originalan klasičan automobil? Došli ste na pravo
						mesto! Oldtajmeri u našem salonu dolaze iz celog sveta. Zbog naših kompetitivnih cena, mi prodajemo automobile širom
						sveta i imamo iskustvo u organizovanju transporta. Pored kupovine, prodaje i transporta, mi takođe nudimo i tehničke
						usluge u potpuno opremljenoj radionici sa specijalizovanim i obučenim mehaničarima oldtajmera. Nudimo širok spektar
						usluga za Vaš klasični automobil. Bilo da Vam je potrebno farbanje, varenje, servis, ili popravka, uvek ste dobrodošli
						u našu radionicu.</p>
					<br>
					<p>Svi automobili prodati od strane kompanije "Polovni Oldtajmeri" (osim projekata restauracije) su prethodno temeljno
						testirani i provereni. Tokom svih ovih godina našeg iskustva u radu sa oldtajmerima, mi smo razvili kompletnu "checklistu"
						kojom garantujemo kvalitet i bezbednost naših automobila. Čak i nakon što automobil ispuni sve stavke naše "checkliste",
						popravke i će biti obavljene ako je neophodno, tako da budete sigurni da kupujete potpuno pouzdan klasičan automobil
						vredan puta!</p>
					<br>
					<p>
						<h3>
							<center>POSETITE NAS!</center>
						</h3>
					</p>
					<br>
					<img src="img/showroom2.jpg" id="showroomslika"></img>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="desnakolona">
					<table border="1" class="table-responsive desnatabela">
						<tr class="donjalinija">
							<td>
								<img src="img/ikonice/mehanika.png"></img>
							</td>
							<td class="ljubicastitext">
								<span>
									<strong>Radionica sa više od 20 mehaničara</strong>
								</span>
							</td>
						</tr>
						<tr class="donjalinija">
							<td>
								<img src="img/ikonice/registracija.png"></img>
							</td>
							<td class="ljubicastitext">
								<span>
									<strong>Registracija vozila (Srbija, Republika Srpska)</strong>
								</span>
							</td>
						</tr>
						<tr class="donjalinija">
							<td>
								<img src="img/ikonice/checklista.png"></img>
							</td>
							<td class="ljubicastitext">
								<span>
									<strong>Detaljan pregled po dugo razvijanom standardu</strong>
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<img src="img/ikonice/kvalitet.png"></img>
							</td>
							<td class="ljubicastitext">
								<span>
									<strong>Zagarantovan kvalitet usluge i dugogodišnje iskustvo</strong>
								</span>
							</td>
						</tr>
					</table>
					<table border="1" class="table-responsive izdvajamo">
						<tr class="izdvajamohedlajn">
							<td>
								<p class="hedlajntext">IZDVAJAMO</p>
							</td>
						</tr>
						<tr>
							<td>
								<center>
									<img src="img/AMDB500.jpg" id="hedlajnslika"></img>
								</center>
							</td>
						</tr>
						<tr class="izdvajamoime">
							<td class="ljubicastitext">
								<strong>Aston Martin DB500 '64</strong>
							</td>
						</tr>
						<tr class="izdvajamohedlajn">
							<td>
								<span class="cena">€895.000</span>
							</td>
						</tr>
					</table>
					<table border="1" class="table-responsive izdvajamo">
						<tr class="izdvajamohedlajn">
							<td>
								<p class="hedlajntext">ISKUSTVA</p>
							</td>
						</tr>
						<tr>
							<td class="iskustva">
								<p class="textpadding">
									<br>
									<strong>
										<i>Isidora Djordjevic</i>
									</strong>, Prnjavor:
									<br>
									<p class="citat">
										"Definitivno najveća ponuda oldtajmera na Balkanu! Profesionalno i stručno osoblje."
									</p>
								</p>
								<p class="textpadding">
									<strong>
										<i>Aleksa Vukovic</i>
									</strong>, Zemun Polje:
									<br>
									<p class="citat">
										"Hvala Vam na gostoprimstvu i ljubaznosti. Prezadovoljan sam uslugom, moj oldtimer je kao nov."
									</p>
								</p>
								<p class="textpadding">
									<strong>
										<i>Nikola Ugarkovic</i>
									</strong>, Skela:
									<br>
									<p class="citat">
										"Preporučujem ovaj auto centar svima u državi!"
									</p>
								</p>
								<br>
							</td>
							<tr class="izdvajamohedlajn">
								<td>
									&nbsp;
								</td>
							</tr>
					</table>
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