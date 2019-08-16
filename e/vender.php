<?php

require_once('php/vendaDao.php');    
require_once('php/venda.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2"
        aria-controls="navbar2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">
        <img src="logo.png" width="65" height="60" alt="Logo">
    </a>
    <a class="" href="login.html">Entrar</a>

    <div class="collapse navbar-collapse justify-content-between" id="navbar2">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html" aria-haspopup="true" aria-expanded="false">
                    Início
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="vender.html" aria-haspopup="true" aria-expanded="false">
                    Vender
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pesquisar.html" aria-haspopup="true" aria-expanded="false">
                    Comprar
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="minhasVendas.html" aria-haspopup="true" aria-expanded="false">
                    Minhas Vendas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html.html" aria-haspopup="true" aria-expanded="false">
                    Minhas Compras
                </a>
            </li>
        </ul>
    </div>
</nav>








<h3 class="textocentro">Vender</h3>
<br>
<br>
<p class="textocentro">Preencha corretamente os campos abaixo</p>
<p class="textocentro">Você pode editar Depois</p>
<br>
<br>
<br>



<form action="php/upaProdutos.php" method="post">


    <div class="form-group">
        <p class="textocentro">Nome do Item</p>
        <input type="text" name="nomeItem" class="form-control textocentro" id="formGroupExampleInput" placeholder="Nome do Item">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Quantidade (Ex: Caixas, Unidades...)</p>
        <input type="text" name="quantidade" class="form-control textocentro" id="formGroupExampleInput" placeholder="Quantidade">
    </div>

    <div class="form-group">
        <p class="textocentro">Peso</p>
        <input type="text" name="peso" class="form-control textocentro" id="formGroupExampleInput" placeholder="Peso">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Data de Validade</p>
        <p class="textocentro">(Toque no ícone para abrir o calendário)</p>
        <input type="date" name="dataValidade" class="form-control textocentro" id="formGroupExampleInput" placeholder="Validade">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Descrição do Produto</p>
        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    
    <br>

    <div class="form-group">
        <p class="textocentro">Embalagem</p>
        <input type="text" name="embalagem" class="form-control textocentro" id="formGroupExampleInput" placeholder="embalagem">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Cidade</p>
        <input type="text" name="cidade" class="form-control textocentro" id="formGroupExampleInput" placeholder="cidade">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Bairro</p>
        <input type="text" name="bairro" class="form-control textocentro" id="formGroupExampleInput" placeholder="Bairro">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Local</p>
        <input type="text"  name="rua" class="form-control textocentro" id="formGroupExampleInput" placeholder="Rua e Nº">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Complemento (Opcional)</p>
        <input type="text" name="complemento" class="form-control textocentro" id="formGroupExampleInput" placeholder="Complemento">
    </div>

    <br>

    <div class="form-group">
        <p class="textocentro">Preço Total</p>
        <input type="number" name="preco" class="form-control textocentro" id="formGroupExampleInput" placeholder="Preço">
    </div>

    <br>
    <br>

    <div class="textocentro">
    <button type="submit" class="btn btn-success">Salvar e Enviar minha venda</button>
    </div>

    <br>
    <br>

</form>



    <script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script asyc src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script async src="js/main.js"></script>




</body>

</html>