<?php
session_start();
if ($_SESSION['logado'] == 'true'){
	$idAgenda = $_POST['idAgenda'];

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
	<section id="oquee" class="section section-padded gray-bg">
		<div class="container">
			<div class="row">
			  <div class="col-md-12 text-center title line-vertical">
				<div class="panel panel-primary">
  				 <div class="panel-heading"><strong>AVALIAÇÂO</strong></div>
  				   <div class="panel-body">
				<div class="col-md-12 text-left title line-vertical">
				<div class="alert alert-danger fade in" style="display:none;" id="erro">Erro ao registrar! Por favor, tente mais tarde.</div>
				<div class="alert alert-success fade in" style="display:none;" id="ok">Agradecemos sua colaboração! Sua avaliação já foi registrada.</div>
				<form method="post" class="popup-form" action="avaliacao_usuario-cadastrar.php" enctype="multipart/form-data">	
					<input type="hidden" name="idAgenda" value="<?=$idAgenda?>">
					<label for="rating"><h4><strong>Como você avalia o adestrador?</strong></h4></label>
						<fieldset class="rating">
						    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Perfeito">5 stars</label>
						    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Excelente">4 stars</label>
						    <input type="radio" id="star3" name="rating" value="3" checked/><label for="star3" title="Bom">3 stars</label>
						    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Ruim">2 stars</label>
						    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Horrível">1 star</label>
						</fieldset>
					<label for="estrelas"><h4><strong>Comente sobre o adestrador:</strong></h4></label>
					<input type="text" name="comentario" maxlength="61" id="comentario" class="required form-control form-white" placeholder="" value=""><br>	

					<button type="submit" class="btn btn-lg btn-block btn-info btn-avaliacao">Enviar</button>
				</form>
			</div>
			</div>
			</div>
		</div>
	</div>
</section>
			
<?php

}else{
	header('Location: index.php');
}
		

?>

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

	<script>
    $.fn.stars = function() {
        return $(this).each(function() {

            var rating = $(this).data("rating");

            var numStars = $(this).data("numStars");

            var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star"></i>');

            var halfStar = ((rating%1) !== 0) ? '<i class="fa fa-star-half-empty"></i>': '';

            var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o"></i>');

            $(this).html(fullStar + halfStar + noStar);

        });
    }

    $('.stars').stars();
   	</script>


</body>

</html>
