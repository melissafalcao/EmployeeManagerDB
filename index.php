<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Controle de Funcionários</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>CPF:</th>
					<th>Nome:</th>
					<th>Data de Nascimento(ano/mes/dia):</th>
					<th>Cargo:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM funcionario";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['cpf']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['data_nascimento']; ?></td>
					<td><?php echo $dados['cargo']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['cpf']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['cpf']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['cpf']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse funcionário?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="cpf" value="<?php echo $dados['cpf']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar funcionário</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

