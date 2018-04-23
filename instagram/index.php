<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Contas Instagram</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Instagram</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>


	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>Login</th>
    <th>Senha</th>
		<th>Data Cadastro</th>
	</tr>
</thead>
<tbody>
<?php if ($instas) : ?>
<?php foreach ($instas as $insta) : ?>
  <?php $ativar = ($insta['ativo'] == 1) ? "success" : "danger" ; ?>
	<tr class="<?php echo $ativar; ?>">
		<td><?php echo $insta['id']; ?></td>
		<td><?php echo $insta['nome']; ?></td>
		<td><?php echo $insta['loginInsta']; ?></td>
    <td><?php echo $insta['passInsta']; ?></td>
		<td><?php echo $insta['dataCadastro']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $insta['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $insta['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $insta['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
