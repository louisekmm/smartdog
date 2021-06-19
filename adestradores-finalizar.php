<?php
session_start();
//echo($_POST['horario']);
		if(isset($_SESSION['dia'])){
			$hora = $_POST['horario'];
			$hora1 = new DateTime($hora);
			$con = new MySQLi("localhost", "root", "smartdog", "adestramento");
			$data1 = $data = implode('-', array_reverse(explode('/', $_SESSION['data'])));	
			$sql = "INSERT INTO agenda (idAdestrador, idUsuario, idDia, idPeriodo, idLugar, idEspecialidade, data,hora) VALUES (".$_SESSION['idAdestrador'].",".$_SESSION['id'].",".$_SESSION['dia'].",".$_SESSION['periodo'].",".$_SESSION['lugar'].",".$_SESSION['esp'].",'".$data1."','".$hora1->format('h:i:s')."')";
			$result = $con->query($sql) or die($con->error);
			unset($_SESSION['idAdestrador']);
			unset($_SESSION['dia']);
			unset($_SESSION['periodo']);
			unset($_SESSION['lugar']);
			unset($_SESSION['preco']);
			unset($_SESSION['data']);
			unset($_SESSION['esp']);
			echo '1';
		
		}
		else{
			//echo 'ah';
			header('Location: adestradores.php');
		}
?>
