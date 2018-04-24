<?php
  require_once('functions.php');
  clienteFind();
  add();
?>

<?php include(HEADER_TEMPLATE); ?>
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

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
      <label for="campo2">Login</label>
      <input type="text" class="form-control" name="customer['loginInsta']" value="<?php echo $customer['loginInsta']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Senha</label>
      <input type="text" class="form-control" name="customer['passInsta']" value="<?php echo $customer['passInsta']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo1">Data Cadastro</label>
      <input type="text" class="form-control" name="customer['dataCadastro']" disabled value="<?php echo $customer['dataCadastro']; ?>">
    </div>

    <div class="form-group col-md-2 ">
      <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime">
    </div>

  </div>
  <div class="row">


    <div class="form-group col-md-3">
      <label for="campo2">Data Vencimento Contrato</label>
      <input class="form-control" id="date"  name="date" placeholder="MM/DD/YYYY" type="text"/>

    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Perfil Instagram</label>
      <input type="text" class="form-control" name="customer['perfilInsta']" value="<?php echo $customer['perfilInsta']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Foto Instagram</label>
      <input type="text" class="form-control" name="customer['fotoInsta']" value="<?php echo $customer['fotoInsta']; ?>">
    </div>

  <div class="row">

    <div class="form-group col-md-2">
      <label for="campo3">Seguindo</label>
      <input type="text" class="form-control" name="customer['seguidorIni']" value="<?php echo $customer['seguidorIni']; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="campo3">Seguindores</label>
      <input type="text" class="form-control" name="customer['seguindoIni']" value="<?php echo $customer['seguindoIni']; ?>">
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
