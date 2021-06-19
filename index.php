<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adestramento</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">

	<link href="css/jquery-ui.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/imgareaselect-default.css" rel="stylesheet">
	
	<link href="css/0-bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="css/0-bootstrap-rating.css" rel="stylesheet">
	<link href="css/1-default.css" rel="stylesheet">
	<link href="css/1-tabs.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="css/default.css" rel="stylesheet">
	<link href="css/fullcalendar.min.css" rel="stylesheet">

</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<?php
		if(!isset($_SESSION['logado'])){
	?>


	<nav class="navbar">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="adestradores.php"><i class="icon_search"></i> PROCURAR ADESTRADORES</a></li>
					<!--<li><a href="#">QUEM SOMOS</a></li>-->
					<li><a href="#">ADESTRAR</a></li>
					<li><a href="ajuda.php">FAQ</a></li>
					<li><a href="#modal1"  data-toggle="modal" class="btn" style="background-color: #00a8ff; color:white;border-width: 0;">Vamos começar?</a></li>
					<li><a href="#modal3"  data-toggle="modal" style="padding-right: 0; padding-left: 0;">ENTRAR</a></li>
					<!--<li><a href="#">IDIOMA</a></li>-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	
	<?php
		}else{
			if($_SESSION['logado'] == 'true'){
	?>
	<nav class="navbar">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				  <?php
				    if ($_SESSION['tipo'] == 1){
				   ?>
					<li><a href="adestradores.php"><i class="icon_search"></i> Procurar Adestradores</a></li>
					<li><a href="adestramentos.php"><i class="icon_calendar"></i> Meus adestramentos</a></li>
					<?php
				   }else{
				   ?>
				   	<li><a href="horarios.php"><i class="icon_clock_alt"></i> Meus horários</a></li>
					<li><a href="agenda.php"><i class="icon_calendar"></i> Agenda</a></li>
				   <?php
				   }
				   ?>
					<li><a href="mensagens.php"><i class="icon_mail_alt"></i> Mensagens</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle btn" style="background-color: #00a8ff; color:white;border-width: 0;"data-toggle="dropdown" >
							<i class="icon_profile"></i> 
							<?php
								$partes = explode(" ", $_SESSION['nome']);
								$primeiro = $partes[0];
								$ultimo = array_pop($partes);
								echo ($primeiro." ".$ultimo);
							?> <i class="arrow_carrot-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user menudown">
	                        <!--<li class="divider"></li>-->
							<li><a href="perfil.php"><i class="icon_pencil"></i> Meus dados</a>
							<?php
				   			 if ($_SESSION['tipo'] == 2){
				   			?>
				   			<li><a href="perfil-adestrador.php"><i class="icon_heart"></i> Adestrador</a>
				   			<?php }?>
				   			<?php
				   			 if ($_SESSION['amigos'] == 0){
				   			?>
				   			<li><a href="amigos.php"><i class="icon_contacts_alt"></i> Ganhe um cupom</a>
				   			<?php }?>
	                        <li><a href="logout.php"><i class="icon_lock-open"></i> Sair</a>
	                        <li><a href="ajuda.php"><i class="icon_question_alt2"></i> Ajuda</a></li>
	                        </li>
	                    </ul>
					</li>
					<!--<li><a href="#">IDIOMA</a></li>-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<?php	
			}
		}
	?>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">

							<h1 class="white typed">Tenha o cachorro IDEAL. Adestre o seu animal!</h1>
							<span class="typed-cursor">|</span>


							<ul class="nav nav-tabs panel-default">
								<li class="active">
									<a class="border-walk type-service" data-toggle="tab" data-value="walk" href="#walk_service"><div class="icon-wrapper"><i class="picon-petanjo-walk"></i><span class="text-wrapper">Passeio</span></div></a>
								</li>
								<li>
									<a class="border-lodging type-service" data-toggle="tab" data-value="lodging" href="#lodging_service"><div class="icon-wrapper"><i class="picon-petanjo-lodging"></i><span class="text-wrapper">Hospedagem</span></div></a>
								</li>
								<li>
									<a class="border-visit type-service" data-toggle="tab" data-value="visit" href="#visit_service"><div class="icon-wrapper"><i class="picon-petanjo-visit"></i><span class="text-wrapper">Pet sitter</span></div></a>
								</li>
								<li>
									<a class="border-bath type-service" data-toggle="tab" data-value="bath" href="#bath_service"><div class="icon-wrapper"><i class="picon-petanjo-bath"></i><span class="text-wrapper">Banho</span></div></a>
								</li>
								<li>
									<a class="border-daycare type-service" data-toggle="tab" data-value="daycare" href="#daycare_service"><div class="icon-wrapper"><i class="picon-petanjo-daycare"></i><span class="text-wrapper">Day Care</span></div></a>
								</li>
							</ul>
							<div class="tab-content">
									<div class="tab-pane fade" id="walk_service"><span class="text-wrapper-pane visible-xs visible-sm">Passeio</span></div>
									<div class="tab-pane fade active in" id="lodging_service"><span class="text-wrapper-pane visible-xs visible-sm">Hospedagem</span></div>
									<div class="tab-pane fade" id="visit_service"><span class="text-wrapper-pane visible-xs visible-sm">Pet sitter</span></div>
									<div class="tab-pane fade" id="bath_service"><span class="text-wrapper-pane visible-xs visible-sm">Banho</span></div>
									<div class="tab-pane fade" id="daycare_service"><span class="text-wrapper-pane visible-xs visible-sm">Day Care</span></div>



									<div class="col-md-12"><div class="col-md-7"><div class="form-group string optional angel_search_address"><label class="string optional control-label" for="angel_search_address">Endereço</label><div><div class="input-group col-sm-12"><span class="input-group-addon input-border-right"><i class="picon-petanjo-maps"></i></span><input class="string optional form-control input-no-border-radius border-radius-right-mobile" id="js-location-autocomplete" placeholder="Em que bairro você mora?" type="text" name="angel_search[address]" autocomplete="off"></div></div></div></div><div class="col-md-3"><div class="type_service_filter_walk " style="display: block;"><div class="form-group string optional angel_search_pet"><label class="string optional control-label" for="angel_search_pet">Pet</label><div><div class="input-group col-sm-12"><span class="input-group-addon input-no-border-radius input-no-border-left-right border-radius-left-mobile"><i class="picon-petanjo-walk-circle"></i></span><div class="form-group select optional angel_search_pet"><label class="select optional control-label" for="angel_search_pet">Pet</label><div><select class="select optional form-control" name="angel_search[pet]" id="angel_search_pet"><option value="">Qual o seu pet?</option>
<option value="dog_up_to_10">Cão (até 10kg)</option>
<option value="dog_up_to_25">Cão (até 25kg)</option>
<option value="dog_over_25">Cão (+ de 25kg)</option>
<option value="dog_over_40">Cão (+ de 40kg)</option>
<option value="cat">Gato</option>
<option value="mini_pig">Mini-porco</option></select></div></div></div></div></div></div><div class="type_service_filter_lodging collapse" style="display: none;"><div class="form-group string optional angel_search_pet"><label class="string optional control-label" for="angel_search_pet">Pet</label><div><div class="input-group col-sm-12"><span class="input-group-addon input-no-border-radius input-no-border-left-right border-radius-left-mobile"><i class="picon-petanjo-walk-circle"></i></span><div class="form-group select optional disabled angel_search_pet"><label class="select optional control-label" for="angel_search_pet">Pet</label><div><select class="select optional disabled form-control" name="angel_search[pet]" id="angel_search_pet" disabled=""><option value="">Qual o seu pet?</option>
<option value="dog_up_to_10">Cão (até 10kg)</option>
<option value="dog_up_to_25">Cão (até 25kg)</option>
<option value="dog_over_25">Cão (+ de 25kg)</option>
<option value="dog_over_40">Cão (+ de 40kg)</option>
<option value="cat">Gato</option>
<option value="ferret">Ferret</option>
<option value="bird">Ave</option>
<option value="mini_pig">Mini-porco</option>
<option value="reptile_or_amphibian">Réptil ou anfíbio</option>
<option value="rodent">Coelho ou Roedor</option></select></div></div></div></div></div></div><div class="type_service_filter_visit collapse" style="display: none;"><div class="form-group string optional angel_search_pet"><label class="string optional control-label" for="angel_search_pet">Pet</label><div><div class="input-group col-sm-12"><span class="input-group-addon input-no-border-radius input-no-border-left-right border-radius-left-mobile"><i class="picon-petanjo-walk-circle"></i></span><div class="form-group select optional disabled angel_search_pet"><label class="select optional control-label" for="angel_search_pet">Pet</label><div><select class="select optional disabled form-control" name="angel_search[pet]" id="angel_search_pet" disabled=""><option value="">Qual o seu pet?</option>
<option value="dog_up_to_10">Cão (até 10kg)</option>
<option value="dog_up_to_25">Cão (até 25kg)</option>
<option value="dog_over_25">Cão (+ de 25kg)</option>
<option value="dog_over_40">Cão (+ de 40kg)</option>
<option value="cat">Gato</option>
<option value="ferret">Ferret</option>
<option value="bird">Ave</option>
<option value="mini_pig">Mini-porco</option>
<option value="reptile_or_amphibian">Réptil ou anfíbio</option>
<option value="rodent">Coelho ou Roedor</option></select></div></div></div></div></div></div><div class="type_service_filter_bath collapse" style="display: none;"><div class="form-group string optional angel_search_pet"><label class="string optional control-label" for="angel_search_pet">Pet</label><div><div class="input-group col-sm-12"><span class="input-group-addon input-no-border-radius input-no-border-left-right border-radius-left-mobile"><i class="picon-petanjo-walk-circle"></i></span><div class="form-group select optional disabled angel_search_pet"><label class="select optional control-label" for="angel_search_pet">Pet</label><div><select class="select optional disabled form-control" name="angel_search[pet]" id="angel_search_pet" disabled=""><option value="">Qual o seu pet?</option>
<option value="dog_up_to_10">Cão (até 10kg)</option>
<option value="dog_up_to_25">Cão (até 25kg)</option>
<option value="dog_over_25">Cão (+ de 25kg)</option>
<option value="dog_over_40">Cão (+ de 40kg)</option>
<option value="cat">Gato</option></select></div></div></div></div></div></div><div class="type_service_filter_daycare collapse"><div class="form-group string optional angel_search_pet"><label class="string optional control-label" for="angel_search_pet">Pet</label><div><div class="input-group col-sm-12"><span class="input-group-addon input-no-border-radius input-no-border-left-right border-radius-left-mobile"><i class="picon-petanjo-walk-circle"></i></span><div class="form-group select optional disabled angel_search_pet"><label class="select optional control-label" for="angel_search_pet">Pet</label><div><select class="select optional disabled form-control" disabled="disabled" name="angel_search[pet]" id="angel_search_pet"><option value="">Qual o seu pet?</option>
<option value="dog_up_to_10">Cão (até 10kg)</option>
<option value="dog_up_to_25">Cão (até 25kg)</option>
<option value="dog_over_25">Cão (+ de 25kg)</option>
<option value="dog_over_40">Cão (+ de 40kg)</option>
<option value="cat">Gato</option>
<option value="ferret">Ferret</option>
<option value="bird">Ave</option>
<option value="mini_pig">Mini-porco</option>
<option value="reptile_or_amphibian">Réptil ou anfíbio</option>
<option value="rodent">Coelho ou Roedor</option></select></div></div></div></div></div></div></div><div class="col-md-2"><button class="btn-blue-filter input-border-left border-radius-btn-mobile" type="submit">Buscar Agora</button></div></div></div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--
	<section id="oquee" class="section section-padded gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 text-center title line-vertical">
					<h1 style="padding-bottom:10px;">O que é o Roof?</h1>
					<h4 class="light muted lead" style="padding-bottom:0px;">O Roof é um site que oferece o serviço GRATUITO para que você adote o cachorro mais ideal para sua família. <br>
					Você não precisará ir em várias feiras de adoção até achar que encontrou o pet perfeito. O Roof facilita sua vida disponibilizando 5 opções de cachorros mais compatíveis com as características que você forneceu sobre os moradores da sua casa.<br>
					Nossa meta é aumentar o número de adoções bem-sucedidas e auxiliar a família nesse momento único! Estaremos aqui para que tudo saia o mais perfeito que conseguirmos!
					</h4>
				</div>
      	<div class="col-sm-3 padding-line">
		 			<h4>Frequently Asked</h4>
		 			<div class="hline"></div>
		 			<div style="padding-top:30px;">
		 			<p><a href="#">How cool is this theme?</a></p>
		 			<p><a href="#">Need a nice good-looking site?</a></p>
		 			<p><a href="#">Is this theme retina ready?</a></p>
		 			<p><a href="#">Which version of Font Awesome uses?</a></p>
		 			<p><a href="#">Free support is integrated?</a></p>
		 			</div>
		 		</div>
	 		</div>
		</div>
	</section>

	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Como funciona?</h2>
				<h4 class="light muted">Achieve the best results with our wide variety of training options!</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/family-blue1.png" alt="" class="icon">
						</div>
						<h4 class="heading">FAMÍLIA</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
						 <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/cachorro-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">CACHORRO</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
						 <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/match-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">MATCH!</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
						 <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Team</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Ben Adamson</h4>
							<h5 class="muted regular">Fitness Instructor</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Eva Williams</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>John Phillips</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog1">
			<div class="modal-content modal-popup1">
				<a href="#" class="close-link" data-dismiss="modal"><i class="icon_close_alt2"></i></a>
				<h3 class="white">CADASTRO </h3>
				<form method="post" class="popup-form" action="cadastro-basico.php" enctype="multipart/form-data">	
					<input style="display:none" type="text" name="fakeusernameremembered">
					<input style="display:none" type="password" name="fakepasswordremembered">
					
					<input type="hidden" value="1" id="idAdmin_Tipo" name="idAdmin_Tipo">
					<input type="text" maxlength="250" name="nome" class="required form-control form-white nome nomee" placeholder="Nome Completo">
					<input type="text" name="email" maxlength="250" id="email" class="required form-control form-white email" placeholder="E-mail">
					<input type="text" name="nascimento" maxlength="250" id="nascimento" class="required form-control form-white data" placeholder="Data de Nascimento">
					<input  type="text" name="celular" maxlength="250" id="celular" class="required form-control form-white telefone" placeholder="Celular">
					<input  type="password" name="senha" maxlength="250" id="senha" class="required form-control form-white" placeholder="Senha">
					<div class="form-group">
					 <select class="form-control required" id="idAdmin_Tipo" name="idAdmin_Tipo">
					    <option value="1" selected>Não sou adestrador</option>
					    <option value="2">Sou adestrador</option>
					  </select>
					</div>

					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" class="required" value="None" id="squaredOne" name="check" id="check" />
							<label for="squaredOne"><span>Eu concordo com os <strong>Termos &amp; Condições</strong>.</span></label>
						</div>
					</div>


					<button type="submit" class="btn btn-submit">Cadastrar</button>
				</form>
				
			</div>
		</div>
	</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog1">
			<div class="modal-content modal-popup2">
				<a href="#" class="close-link" data-dismiss="modal">X</a>
				<h3>Cadastro</h3>
				<br>
				<div class='alert alert-success fade in'>Cadastro efetuado com sucesso! Entre em sua conta para começar!</div> 
			</div>
		</div>
	</div>
	
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog1">
			<div class="modal-content modal-popup3">
				<a href="#" class="close-link" data-dismiss="modal" onclick="document.getElementById('erro3').style.visibility = 'hidden';"><i class="icon_close_alt2"></i></a>
				<h2 class="white">LOGIN</h2>
				<div class="alert alert-danger fade in" style="visibility: hidden;" id="erro3">E-mail e/ou senha incorretos!</div>
				<form method="post" class="popup-form" action="login.php" data-redirect='index.php'>	

					<input type="text" name="email" maxlength="250" id="email" class="required form-control form-white email" placeholder="E-mail" autofocus>
					<input  type="password" name="senha" maxlength="250" id="senha" class="required form-control form-white" placeholder="Senha">
					
					<button type="submit" class="btn btn-lg btn-success btn-block btn-login" data-loading-text="Carregando">Entrar</button>
				</form>
				<h4 style="background-color: white;"><a href="#" onclick="$('#modal1').modal('show');$('#modal3').modal('hide');">Ainda não tenho cadastro</a></h4>
			</div>
		</div>
	</div>

<!--
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 22:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>-->
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>

	<!-- Scripts -->
	<script src="js/0-jquery.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/1-bootstrap-colorpicker.min.js"></script>
	<script src="js/1-jquery.imgareaselect.min.js"></script>
	<script src="js/1-jquery-ui.min.js"></script>
	<script src="js/1-moment.min.js"></script>
	<script src="js/2-fullcalendar.min.js"></script>
	<script src="js/2-jquery.input.mask.min.js"></script>
	<script src="js/2-jquery.validate.min.js"></script>
	<script src="js/2-menu.js"></script>
	<script src="js/3-fullcalendar-pt-br.js"></script>
	<script src="js/3-jquery-validate.bootstrap-tooltip.min.js"></script>
	<script src="js/3-messages_pt_BR.min.js"></script>
	<script src="js/3-miniatura.js"></script>
	<script src="js/4-bootstrap-rating.min.js"></script>
	<script src="js/5-default.js"></script>
	<script src="js/5-especifico.js"></script>


	<script src="js/owl.carousel.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>

	<?php
	if(isset($_GET['l']) && $_GET['l'] == 'l'){
		echo("<script>$(document).ready(function(){
    $('#modal3').modal('show'); });
</script>");
}
if(isset($_GET['l']) && $_GET['l'] == 'c'){
		echo("<script>$(document).ready(function(){
    $('#modal1').modal('show'); });
</script>");
}
?>

</body>

</html>
