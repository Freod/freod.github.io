<!doctype html>
<html lang="pl-PL">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!--Własny css-->
		<!--link href="skrypts/reset_css.css" rel="stylesheet"-->
		<link href="skrypts/style.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="imgs/herb_pomorskie.png">
		<title>Turystyczne atrakcje pomorza wschodniego.</title>
	</head>
	<body>
		<!--img alt="Logo" title="Logo" class="logo" src="imgs/herb_pomorskie.png"/-->
		<nav class="navbar-expand-md navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoller" aria-controls="navbartoller" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbartoller">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item d-none d-md-flex col-1">
						<div class="navbar-brand">
							<img src="imgs/herb_pomorskie.png" width="50" height="50" alt="">
						</div>
					</li>
					<li class="nav-item col-sm">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Strona Główna</a>
					</li>
					<li class="nav-item col-sm">
						<a class="nav-link" id="paragraph-tab" data-toggle="tab" href="#paragraph" role="tab" aria-controls="paragraph" aria-selected="false">Atrakcje</a>
						<!--a class="nav-link" id="paragraph-tab" data-toggle="tab" href="#paragraph" role="tab" aria-controls="paragraph">Atrakcje</a-->
					</li>
					<li class="nav-item col-sm">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Kontakt</a>
						<!--a class="nav-link" id="contact-tab" href="#contact" >Kontakt</a-->
					</li>
				</ul>
			</div>
		</nav>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				
					<div class="baner d-none d-md-block" id="baner">	
						<img class="pokaz_slajdow" src="imgs/baner1.jpg">
						<img class="pokaz_slajdow" src="imgs/baner2.png">
						<img class="pokaz_slajdow" src="imgs/baner3.png">
					</div>
					<div class="container">
						Strona na przedmiot WIA. O temacie atrakcje pomorza wschodniego. Wykonanana przez Radosława Paradeckiego, Szymona Melzera, Zuzie Gnech. Z wykorzystaniem HTML, CSS, JS, Json, Bootstrap.
					</div>
				

			</div>
			<!--div class="tab-pane fade" id="paragraph" role="tabpanel" aria-labelledby="paragraph-tab">
				...
			</div>
			<!--div class="tab-pane fade" id="paragraph" role="tabpanel" aria-labelledby="paragraph-tab">
				1
			</div>
			<div class="tab-pane fade" id="paragraph" role="tabpanel" aria-labelledby="paragraph-tab">
				2
			</div-->
			<div class="tab-pane fade paragraph" id="paragraph" role="tabpanel" aria-labelledby="paragraph-tab">
				<!--div class="container"><div class="container information"><a class="extend_img" href="" title="Powieksz"><img class="miniature" alt="Obraz niedziała" src=""></a></div></div-->
				<!--a class="extend_img" href="" title="Powieksz">
					<img class="miniature" alt="Obraz niedziała" src="">
				</a>
				<span class="information"></span-->
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="container">
					Co jeszcze powinno się znaleźć na naszej stronie? Napisz do nas.
					<form action="" method="post">
						<div class="col-12">
							<div class="col-12">
								E-mail:
								<input type="email" class="form-control" id="emailForm" placeholder="E-mail" name="mail" required>
							</div>
							<div class="form-row col-12">
								<div class="col-md-6">
									Imie
									<input type="text" class="form-control" id="nameForm" placeholder="Imie" name="name" required>
								</div>
								<div class="col-md-6">
									Nazwisko
									<input type="text" class="form-control" id="surnameForm" placeholder="Nazwisko" name="surname" required>
								</div>
							</div>
							<div class="col-12">
								Wiadomość:
								<textarea class="form-control" id="textareaForm" rows="3" placeholder="Wiadomość" name="message" required></textarea>
							</div>
							<div class="col-12">
								<input type="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--div class="tab-pane fade paragraph" id="paragraph0" role="tabpanel" aria-labelledby="paragraph-tab">
				<a class="extend_img" href="" title="Powieksz"><img class="miniature" alt="Obraz niedziała" src=""></a><span class="information"></span>
			</div-->
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--Stary skrypt-->
		<script src="skrypts/skrypt.js"></script>
		<div class="footer col">
			<!--Radosław Paradecki radek.paradecki@gmail.com-->
			©Copyright 2018. Wykonanie: Paradecki Radosław, Melzer Szymon, Gnech Zuzia.
		</div>
	</body>
	<?php
		if(isset( $_POST["mail"]) && isset( $_POST["name"]) && isset( $_POST["surname"]) && isset( $_POST["message"])){
			$od = "\nFrom: poczta@radekparadecki.cba.pl";
			$email = "poczta@radekparadecki.cba.pl";
			$subject = "CBAMail od ".$_POST["mail"];
			$message = "Dziękujemy za wysłanie formularza";	
			$error = "Wystąpił błąd podczas wysyłania formularza";
			$charset = "UTF-8";
			$head = "MIME-Version: 1.0\r\n" . "Content-Type: text/plain; charset=$charset\r\n" . "Content-Transfer-Encoding: 8bit";
			$body = $_POST["mail"]."\n".$_POST["message"]."\nPodrawiam\n".$_POST["surname"]." ".$_POST["name"];
			mail($email, "=?$charset?B?" . base64_encode($subject) . "?=", $body, $head, $od) ? $message : $error;
			echo "Dziękujemy za wysłanie maila.";
		}
	?>
</html>