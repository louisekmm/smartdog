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

<link rel="stylesheet" href="css/2jquery-ui.css">
  
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
          <li><a href="#" onClick="window.location='index.php?l=c'" class="btn btn-blue">Vamos começar?</a></li>
          <li><a href="#" onClick="window.location='index.php?l=l'" style="padding-right: 0; padding-left: 0;">ENTRAR</a></li>
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
      //include("processar.php"); //conexao bd e verificacoes back-end
?>

<section id="oquee" class="section section-padded gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center title line-vertical">         
          <div class="panel panel-primary">
            <div class="panel-body">
        
              <form action="<?=$_SERVER['PHP_SELF']?>" method="POST"> 
               
                  <div class="text-left"><label>Qual dia você tem disponibilidade para o adestramento?</label></div>   
                   <br>
                   <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active"><input type="radio" name="dia" value="1" checked="checked">Domingo</label>
                      <label class="btn btn-primary"><input type="radio" name="dia" value="2">Segunda</label>
                      <label class="btn btn-primary"><input type="radio" name="dia" value="3">Terça</label>
                      <label class="btn btn-primary"><input type="radio" name="dia" value="4">Quarta</label>
                      <label class="btn btn-primary"><input type="radio" name="dia" value="5">Quinta</label>
                      <label class="btn btn-primary"><input type="radio" name="dia" value="6">Sexta</label>
                      <label class="btn btn-primary"><input type="radio" name="dia" value="7">Sábado</label>
                  </div>

                  <br><br>

                  <div class="text-left"><label>Qual o horário de sua preferência?</label></div>   
                   <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active"><input type="radio" name="periodo" value="1" checked="checked">Manhã</label>
                      <label class="btn btn-primary"><input type="radio" name="periodo" value="2">Tarde</label>
                      <label class="btn btn-primary"><input type="radio" name="periodo" value="3">Noite</label>
                  </div>

                  <div class="text-left"><label>Qual o local de sua preferência?</label></div>   
                   <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active"><input type="radio" name="lugar" value="1" checked="checked">Parque</label>
                      <label class="btn btn-primary"><input type="radio" name="lugar" value="2">Minha casa</label>
                  </div>

                  <br><br>
                  <div class="text-left"><label>Adestramento para:</label></div>  
                  <div class="form-group">
                   <select class="form-control required" id="especialidades" name="especialidades" placeholder="Tipo">
                    <option value="1">Treinamento básico</option>
                    <option value="2">Agressividade com pessoas</option>
                    <option value="3">Ansiedade</option>
                    <option value="4">Coprofagia</option>
                    <option value="5">Depressão</option>
                    <option value="6">Latido excessivo</option>
                    <option value="7">Medo</option>
                    <option value="8">Xixi no lugar correto</option>
                  </select>
                  </div>

                <div class="text-left"><label>Faixa de preço por cada sessão de adestramento:</label></div>
                 <div>
                    <span  class="text-left"><input type="text" class="text-left" id="amount1" name="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;" placeholder="R$ 20"></span>
                    <span class="text-right"><input type="text" class="text-right" id="amount2" name="amount2" class="" readonly style="border:0; color:#f6931f; font-weight:bold;" placeholder="R$ 300"></span>
                </div> 
                <div id="slider-range"></div>
                <br><br><br>
               <button type="submit" class="btn" name="procurar" style="background-color: #2e96e6; width:40%; color:white;border-width: 0;">Procurar</button>
              </form>
            </div>
          </div>

 
        <?php
        //recupera dados
if ($_SERVER['REQUEST_METHOD'] == "POST") {
 ?>
  <div id="resultado">
         <br>
         <h4>Encontramos esses adestradores para você:</h4>
         <br>
 <?php
function getDateForSpecificDayBetweenDates($startDate,$endDate,$day_number){
$endDate = strtotime($endDate);
$days=array('1'=>'Sunday','2' => 'Monday','3' => 'Tuesday','4'=>'Wednesday','5' =>'Thursday','6' => 'Friday','7'=>'Saturday');
for($i = strtotime($days[$day_number], strtotime($startDate)); $i <= $endDate; $i = strtotime('+1 week', $i))
$date_array[]=date('d/m/Y',$i);

return $date_array;
 }

  $especialidade = $_POST['especialidades'];
  $lugar = $_POST['lugar'];
  $dia = $_POST['dia'];
  $period = $_POST['periodo'];

  $valor1 = $_POST['amount1'];
  if(isset($_POST['amount1'])){
    $valor1 = 20;
  }

  $valor2 = $_POST['amount2'];
  if(isset($_POST['amount2'])){
      $valor2 = 300;
    }
          
  $data_atual  = new DateTime('now');
  $data_atual->add(new DateInterval('P1D'));
  $date  = new DateTime('now');
  $date->add(new DateInterval('P3M'));
  $dias[] = getDateForSpecificDayBetweenDates($data_atual->format('Y-m-d'),$date->format('Y-m-d'),$dia);  


  $con = new MySQLi("localhost", "root", "", "adestramento");
  
  $sql = "SELECT a.id as idAdestrador, e.nome as especialidade, h.id as horario, u.nome as nome, a.titulo, a.texto, a.estrelas, ea.preco FROM usuario u INNER JOIN adestrador a ON a.idUsuario=u.id INNER JOIN especialidade_adestrador ea ON ea.idAdestrador = a.id INNER JOIN especialidade e ON e.id=ea.idEspecialidade  INNER JOIN horario h ON h.idAdestrador = a.id WHERE h.idPeriodo=".$period." AND h.idDia=".$dia." AND e.id=".$especialidade." AND ea.preco BETWEEN ".$valor1." AND ".$valor2." GROUP BY a.id";
  //echo($sql);
  $result = $con->query($sql) or die($con->error);
  $cont = 0;
   if($result->num_rows > 0){
     while($linha = $result->fetch_assoc())
      {
        echo("<div class='col-md-6 text-center'>
              <div class='panel panel-info'> 
                  <div class='panel-body'>
                       <h4 style='color:#1a0268;'><strong>".utf8_encode($linha['nome'])."<strong></h4>
                       <div class='line-vertical'>");
                         for($i=1;$i<=$linha['estrelas'];$i++){
                            echo("<i class='fa fa-star-o' style='color:#f4ed2e;'></i> ");
                          }
                          echo(" <a href='avaliacao.php'>Ver avaliações</a></div>
                            <h5 style='color:#8f8da8;'>'".utf8_encode($linha['titulo'])."'</h5>
                            <h5 style='color:#a4a4ac;'>".utf8_encode($linha['texto'])."</h5>
                            <h5><strong>Preço: </strong> R$".$linha['preco']."</h5>
                          <h5><strong>Especialidade: </strong>".utf8_encode($linha['especialidade'])."</h5>");
                     ?>
                <form method='post' action='adestradores-contratar.php' enctype="multipart/form-data">
                 <input type='hidden' name='idAdestrador' value="<?=$linha['idAdestrador']?>">
                 <input type='hidden' name='dia' value="<?=$dia?>">
                 <input type='hidden' name='periodo' value="<?=$period?>">
                  <input type='hidden' name='lugar' value="<?=$lugar?>">
                  <input type='hidden' name='especialidade' value="<?=$especialidade?>">
                   <input type='hidden' name='preco' value="<?=$linha['preco']?>">
                 <div class="form-group">
                 <label for="data"><h5><strong>Dias disponíveis: </strong></h5></label>
                   <select id="data" name="data">
                     <?php
                     $sql2 = "SELECT DATE_FORMAT(data, '%d/%m/%Y') as data1 FROM agenda WHERE idPeriodo=".$period." AND idDia=".$dia." AND idAdestrador=".$linha['idAdestrador']."";
                       $result2 = $con->query($sql2) or die($con->error);
                        $datas = "";
                        while($linha2 = $result2->fetch_assoc()){ 
                           $datas = $linha2['data1'].",".$datas;
                        }
                         foreach ($dias[0] as $num) {
                           if ((substr_count($datas, $num)) < 5 && $period == 1) {
                              echo("<option value='".$num."'>".$num."</option>");
                            }
                            if((substr_count($datas, $num)) < 6 && $period == 2){
                                 echo("<option value='".$num."'>".$num."</option>");
                            }
                            if((substr_count($datas, $num)) < 3 && $period == 3){
                               echo("<option value='".$num."'>".$num."</option>");
                            }
                          }

                ?>
                </select>
                </div>   
                         
                 <button type='submit' class='btn btn-lg btn-success btn-adestradores'>Contratar</button>
              </form>
               <?php          
              echo("</div></div></div>");   

      }
     
     } else{
      //header('Location: index.php');
         echo("<div class='alert alert-warning'>Mude os parâmetros da pesquisa para encontrar um adestrador.");
      //header('Location: index.php');
      
    }
?>
</div>
<?php
}?>
        


      </div>
    </div>
  </div>
  </section>


<div class="modal fade" id="naologado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog1">
      <div class="modal-content modal-popup2">
        <a href="#" class="close-link" data-dismiss="modal">X</a>
        <h3></h3>
        <br>
        <div class='alert alert-info fade in'>Por favor, faça login ou cadastre-se para contratar um adestrador.</div> 
        <button type="button" class="btn btn-primary btn-lg" onClick="window.location='index.php?l=l'">LOGIN</button>
        <br><br>
        <button type="button" class="btn btn-primary btn-lg" onClick="window.location='index.php?l=c'">CADASTRE-SE</button>
      </div>
    </div>
  </div>


  <!-- Holder for mobile navigation -->
  <div class="mobile-nav">
    <ul>
    </ul>
    <a href="#" class="close-link"><i class="arrow_up"></i></a>
  </div>

  <script src="js/jquery-1.12.4.min.js"></script>
  
 
  <script src="js/bootstrap.min.js"></script>
  <script src="js/1-bootstrap-colorpicker.min.js"></script>
  <script src="js/1-jquery.imgareaselect.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
 
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
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 20,
      max: 300,
      values: [ 20, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        $( "#amount1" ).val("R$ " +ui.values[ 0 ]);
        $( "#amount2" ).val("R$ " +ui.values[ 1 ]);
      }

    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
</body>

</html>
