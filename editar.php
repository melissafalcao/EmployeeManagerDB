<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM funcionario WHERE cpf = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar dados do funcionario </h3>
		<form action="php_action/update.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="cpf" id="nome" value="<?php echo $dados['cpf'];?>">
				<label for="nome">CPF</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="nome" value="<?php echo $dados['nome'];?>" id="sobrenome">
				<label for="sobrenome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['data_nascimento'];?>" name="data_nascimento" id="email">
				<label for="email">Data nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cargo'];?>" name="cargo" id="idade">
				<label for="idade">Cargo</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['senha'];?>" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de funcionários </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
