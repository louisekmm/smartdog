<?php
session_start();
	unset($_SESSION['logado']);
	unset($_SESSION['nome']);
	unset($_SESSION['id']);
	unset($_SESSION['tipo']);
	unset($_SESSION['amigos']);
	header('Location: index.php');
	exit();
?>