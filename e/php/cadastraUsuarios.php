<?php

require_once('../php/usuarioDao.php');    
require_once('../php/usuario.php');

$senha1 = md5($_POST["senha"]);

$u1 = new Usuario($_POST['nomeUsuario'], $_POST["email"],$senha1);


$udao = New usuarioDAO();
$udao->inserir($u1);

//redireciona para o listar.php
//header("Location: listar.php");






?>