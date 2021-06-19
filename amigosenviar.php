<?php
session_start();
try {
			
			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql = "UPDATE usuario SET amigos=1 WHERE id=".$_SESSION['id'];
			$resul = $con->query($sql) or die($con->error);
			//header('Location: perfil-adestrador.php');
			//$di->getDb()->commit();
				echo '1';
			
			
		} catch(Exception $e) {
			//$_SESSION['resultado']	 = "<div class='alert alert-danger fade in'>Erro ao atualizar!</div>";
			//header('Location: index.php');
			
		}

?>