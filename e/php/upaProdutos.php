<?php

session_start();

require_once('../php/vendaDao.php');    
require_once('../php/venda.php');

if ($_SESSION['autenticado']){

$p1 = new Venda($_POST['nomeItem'], $_POST["quantidade"], $_POST["peso"], $_POST["dataValidade"], $_POST["descricao"], $_POST["embalagem"], $_POST["cidade"], $_POST["bairro"], $_POST["rua"], $_POST["preco"]);

$p1->set_codVendedor(intval($_SESSION['cod_usuario']));

if ($_POST["complemento"]!==null){
    $p1->set_complemento($_POST["complemento"]);
}

$vdao = New vendaDAO();
$vdao->inserir($p1);
header("Location: ../vender.php");

}
else{
    print("não autenticado");
    //header("Location: login.php");
}




?>