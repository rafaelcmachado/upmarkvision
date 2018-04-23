<?php
  require_once('functions.php');
  clienteFind();
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Instagram</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-3">
      <label for="name">Cliente</label>
      <?php
        if ($cliente == false) {
            echo 'Falha no combo!';
        } else {
            echo "<select type='text' class='form-control' name='customer['idCli']'>";

            for ($i = 0; $i < mysqli_num_rows($cliente); $i++) {
                $linha = mysqli_fetch_array($cliente);
                  echo "<option name='".$linha['id']."'>".$linha['nome']."</option>";
            }
            echo "</select>";
        }
        ?>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="customer['CNPJ_CPF']" value="<?php echo $customer['CNPJ_CPF']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo1">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['dataCadastro']" disabled value="<?php echo $customer['dataCadastro']; ?>">
    </div>
  </div>
  <div class="row">


    <div class="form-group col-md-3">
      <label for="campo2">E-mail</label>
      <input type="text" class="form-control" name="customer['email']" value="<?php echo $customer['email']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Telefone</label>
      <input type="text" class="form-control" name="customer['telefone']" value="<?php echo $customer['telefone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="customer['celulcar']" value="<?php echo $customer['celulcar']; ?>">
    </div>
    <div class="form-check col-md-1">

      <label><input type="checkbox" name="ativo" value="1"
         <?php
            if($customer['ativo'] == 1){
              echo"checked='checked'";
            }

      ?>>Ativo</label>
    </div>
  </div>
  <div class="row">

    <div class="form-group col-md-10">
      <label for="comment">Descrição:</label>
      <textarea class="form-control" rows="5" name="customer['descricao']" value=""><?php echo $customer['descricao']; ?></textarea>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
