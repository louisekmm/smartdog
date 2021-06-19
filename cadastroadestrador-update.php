<?php
session_start();
try {
			$titulo = $_POST['titulo'];
			$texto = $_POST['texto'];
			$idAdestrador = $_POST['idAdestrador'];
			
			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql = "UPDATE adestrador SET texto = '".$texto."', titulo = '".$titulo."' WHERE id=".$idAdestrador;
			$resul = $con->query($sql) or die($con->error);
			$_SESSION['resultado'] = "<div class='alert alert-success fade in'>Atualização efetuada com sucesso! </div>";
			//header('Location: perfil-adestrador.php');
			//$di->getDb()->commit();
				echo '1';
			
			
		} catch(Exception $e) {
			//$_SESSION['resultado']	 = "<div class='alert alert-danger fade in'>Erro ao atualizar!</div>";
			//header('Location: index.php');
			
		}

?>