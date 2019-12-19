<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['cpf']);
	$sobrenome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['data_nascimento']);
	$idade = mysqli_escape_string($connect, $_POST['cargo']);

	$sql = "UPDATE funcionario SET cpf = '$nome', nome = '$sobrenome', data_nascimento = '$email', cargo = '$idade' WHERE cpf = '$nome'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;