<?php
session_start();

			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql = "SELECT id, nome, amigos, idAdmin_Tipo FROM usuario WHERE email='".$email."' AND senha='".$senha."'";
			$result = $con->query($sql) or die($con->error);
			
			if($result->num_rows > 0){
				$linha = $result->fetch_assoc();
				$_SESSION['logado'] = 'true';
				$_SESSION['nome'] = $linha['nome'];
				$_SESSION['id'] = $linha['id'];
				$_SESSION['tipo'] =  $linha['idAdmin_Tipo'];
				$_SESSION['amigos'] =  $linha['amigos'];
			   // header('Location: painel.php');
				echo '1';
			
			
		} else{
			header('Location: index.php');
			//header('Location: index.php');
			
		}

?>