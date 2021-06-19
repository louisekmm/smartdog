<?php
session_start();
if(!isset($_GET["id"])){
	header('Location: index.php');

}else{
	$id = $_GET["id"];
	// session
	 //"$conexao" recebe a Conexão com o Banco de Dados
	$con = new MySQLi("localhost", "root", "", "adestramento");
	$sql = "DELETE FROM agenda WHERE id =".$id; 
	$result = $con->query($sql) or die($con->error);	
	if($_GET["l"] == 'a'){
		 header('Location: agenda.php?l=ok');
	}
	else{
	  header('Location: adestramentos.php?l=ok');
	}
}
?>