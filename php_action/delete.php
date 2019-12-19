<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = $_POST['cpf'];
	echo $id;

	$sql = "DELETE FROM funcionario WHERE cpf = '$id'";

	$hum = mysqli_query($connect, $sql);
	
	if(hum):
		$_SESSION['mensagem'] = "Deletado com sucesso!";

		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;