<?php
include_once('../modelo/cliente.php');
include_once('../modelo/clienteDAO.php');

$clienteDAO = new ClienteDAO();

if (isset($_POST['salvar'])) {
    $clienteDAO->inserir($_POST['nome'], $_POST['email'], $_POST['date'], $_POST['senha']);
}
if (isset($_POST['salva'])) {
    $clienteDAO->inserir2($_POST['hora'], $_POST['cert'], $_POST['datep'], $_POST['nomec'], $_POST['cpf']);
}
if (isset($_POST['bt_listar'])) {
    $clienteDAO->listar();
}

if (isset($_POST['bt_consultar'])) {
    $clienteDAO->buscarCliente($_POST['email']);
}

if (isset($_POST['botao_excluir'])) {
    $clienteDAO->excluir($_POST['id']);
}

if (isset($_POST['botao_editar'])) {
    $clienteDAO->editar($_POST['id']);
}

if (isset($_POST['salvar_alteracao'])) {
    $clienteDAO->salvarEdicao($_POST['id'], $_POST['nomec'], $_POST['datep'], $_POST['hora']);
    $clienteDAO->listar();
}

