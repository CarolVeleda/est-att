<?php
session_start();

require_once('php/vendaDao.php');    
require_once('php/venda.php');
$mdao = New vendaDAO();
$lista = $mdao->listar($_SESSION['cod_usuario']);

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

<br>

<h3 class="textocentro cor">Minhas Vendas</h3>
<br>
<h5 class="text-center">Clique no nome do item para ver detalhes</h5>

<br>
<br>

<?php  
  foreach($lista as $p){
?>

<div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="<?php echo '#'.$p->get_cod(); ?>" aria-expanded="true" aria-controls="<?php echo $p->get_cod(); ?>">
          <?php echo $p->get_nomeItem(); ?>
          </button>
          <button type="button" class="btn btn-success">Editar</button>
          <button type="button" class="btn btn-success">Excluir</button>
        </h5>
      </div>
  
      <div id="<?php echo $p->get_cod(); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <table class="table text-center fontesizeV">
                <thead class="bg-warning">
                  <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Informação</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Item</th>
                    <td> <?php echo $p->get_nomeItem(); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Quantidade</th>
                    <td> <?php echo $p->get_quantidade(); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Peso</th>
                    <td> <?php echo $p->get_peso(); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Validade</th>
                    <td> <?php echo $p->get_dataValidade(); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Descricao</th>
                    <td> <?php echo $p->get_descricao(); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Embalagem</th>
                    <td> <?php echo $p->get_embalagem(); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Preço R$</th>
                    <td> <?php echo $p->get_preco(); ?> </td>
                  </tr>
                  
                  <thead class="alert alert-warning">
                    <tr>
                      <th scope="col">Localização</th>
                      <th scope="col">Informação</th>
                    </tr>
                  </thead>
                  <tr>
                    <th class="alert alert-warning" scope="row">Cidade</th>
                    <td> <?php echo $p->get_cidade(); ?> </td>
                  </tr>
                  <tr>
                    <th class="alert alert-warning" scope="row">Bairro</th>
                    <td> <?php echo $p->get_bairro(); ?> </td>
                  </tr>
                  <tr>
                    <th class="alert alert-warning" scope="row">Local</th>
                    <td> <?php echo $p->get_rua(); ?> </td>
                  </tr>
                  <tr>
                    <th class="alert alert-warning" scope="row">Complemento</th>
                    <td> <?php echo $p->get_complemento(); ?> </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>

<?php } ?>




    <script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script asyc src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script async src="js/main.js"></script>




</body>

</html>