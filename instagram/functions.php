<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
$cidade    = null;
$ativo	   = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $instas;
	$instas = findCliInst();
}

function clienteFind() {
	global $cliente;
	$cliente = findCliente();
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['customer'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['customer'];
    $customer['dataCadastro'] = $today->format("Y-m-d H:i:s");

    save('cliente', $customer);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {



  if (isset($_GET['id'])) {

    $id = $_GET['id'];
		 if (isset($_POST['ativo'])) {
			 $ativo = ($_POST['ativo'] == '1') ? 1 : 0;
		}

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
			$customer['ativo'] = $ativo;

      update('cliente', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('cliente', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('cliente', $id);

  header('location: index.php');
}
