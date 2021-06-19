<?php
session_start();
try {
			$comentario = $_POST['comentario'];
			$rating = $_POST['rating'];
			$idAgenda = $_POST['idAgenda'];
			
			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql = "UPDATE agenda SET avaliacao = ".$rating.", comentario = '".$comentario."' WHERE id=".$idAgenda;
			$resul = $con->query($sql) or die($con->error);
			//header('Location: perfil-adestrador.php');
			//$di->getDb()->commit();
				echo '1';
			
			
		} catch(Exception $e) {
			//$_SESSION['resultado']	 = "<div class='alert alert-danger fade in'>Erro ao atualizar!</div>";
			//header('Location: index.php');
			
		}

?>