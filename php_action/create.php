<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['cpf']);
	$sobrenome = clear($_POST['nome']);
	$email = clear($_POST['data_nascimento']);
	$idade = clear($_POST['cargo']);
	$senha = clear($_POST['senha']);

	$sql = "INSERT INTO funcionario(cpf, nome, data_nascimento, cargo, senha) VALUES ('$nome', '$sobrenome', '$email', '$idade', '$senha')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;
