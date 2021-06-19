<?php
session_start();
try {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$celular = $_POST['celular'];
			$nascimento = $_POST['nascimento'];
			$senha = $_POST['senha'];
			$endereco = $_POST['endereco'];
			$estado = $_POST['estado'];
			$cidade = $_POST['cidade'];

			$data = implode('-', array_reverse(explode('/', $nascimento)));	
			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql = "UPDATE usuario SET email = '".$email."', nome = '".$nome."', celular = '".$celular."', nascimento = '".$data."',endereco = '".$endereco."', estado = '".$estado."', cidade = '".$cidade."', senha='".$senha."' WHERE id=".$_SESSION['id'];
			$resul = $con->query($sql) or die($con->error);
			//$_SESSION['resultado'] = "<div class='alert alert-success fade in'>Atualização efetuada com sucesso! </div>";
			//header('Location: perfil.php');
			//$di->getDb()->commit();
				echo '1';
			
			
		} catch(Exception $e) {
			//$_SESSION['resultado']	 = "<div class='alert alert-danger fade in'>Erro ao atualizar!</div>";
			//header('Location: index.php');
			
		}

?>