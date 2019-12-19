<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Funcionário </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="cpf" id="nome">
				<label for="nome">CPF</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="nome" id="sobrenome">
				<label for="sobrenome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="data_nascimento" id="email">
				<label for="email">Data nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="cargo" id="idade">
				<label for="idade">Cargo</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de funcionários </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
