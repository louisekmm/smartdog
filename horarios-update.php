<?php
session_start();


			$con = new MySQLi("localhost", "root", "", "adestramento");
			$sql1 = "SELECT id FROM adestrador WHERE idUsuario=".$_SESSION['id']."";
			$result1 = $con->query($sql1) or die($con->error);
			$linha1 = $result1->fetch_assoc();

			$sql = "SELECT id as excluir FROM horario WHERE idAdestrador=".$linha1['id']."";
			$result = $con->query($sql) or die($con->error);
			
			while($linha = $result->fetch_assoc()){
				//echo($linha['excluir']);
				$sql2 = "DELETE FROM horario WHERE id =".$linha['excluir']."";
				$result2 = $con->query($sql2) or die($con->error);
			   // header('Location: painel.php');
				//echo '1';
			}

			if(isset($_POST['dia1'])){
				foreach ($_POST['dia1'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'1',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			if(isset($_POST['dia2'])){
				foreach ($_POST['dia2'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'2',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			if(isset($_POST['dia3'])){
				foreach ($_POST['dia3'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'3',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			if(isset($_POST['dia4'])){
				foreach ($_POST['dia4'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'4',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			if(isset($_POST['dia5'])){
				foreach ($_POST['dia5'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'5',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			if(isset($_POST['dia6'])){
				foreach ($_POST['dia6'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'6',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			if(isset($_POST['dia7'])){
				foreach ($_POST['dia7'] as $periodo) {
					$sql3 = "INSERT INTO horario (idAdestrador, idDia, idPeriodo) VALUES (".$linha1['id'].",'7',".$periodo.")";
					$result3 = $con->query($sql3) or die($con->error);
				}
				
			}
			
			header('Location: horarios.php');
			//header('Location: index.php');
			
		

?>