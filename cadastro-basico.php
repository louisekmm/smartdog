<?php
session_start();
try {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$celular = $_POST['celular'];
			$nascimento = $_POST['nascimento'];
			$idAdmin_Tipo = $_POST['idAdmin_Tipo'];
			$senha = $_POST['senha'];
//echo $nascimento;
			$data = implode('-', array_reverse(explode('/', $nascimento)));	

			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql = "INSERT INTO usuario (email, nome, idAdmin_Tipo, celular, nascimento, senha) VALUES ('".$email."','".$nome."',".$idAdmin_Tipo.",'".$celular."','".$data."','".$senha."')";
			$resul = $con->query($sql) or die($con->error);
			
			//header('Location: index.php');
			//$di->getDb()->commit();
				echo '1';
			
			
		} catch(Exception $e) {
			header('Location: index.php');
			
		}

?>