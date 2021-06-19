<?php
session_start();

if(!isset($_SESSION['id'])){
	echo '1';
}else{
	$_SESSION['idAdestrador'] = $_POST['idAdestrador'];
	$_SESSION['periodo'] = $_POST['periodo'];
	$_SESSION['dia'] = $_POST['dia'];
	$_SESSION['data'] =  $_POST['data'];
	$_SESSION['lugar'] =  $_POST['lugar'];
	$_SESSION['preco'] =  $_POST['preco'];
	$_SESSION['esp'] =  $_POST['especialidade'];
	//header('Location: adestradores.php');
}

?>