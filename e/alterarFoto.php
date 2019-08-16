<?php
session_start();

echo 'coe '.$_SESSION['nome_usuario'];
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="https://carolveleda.github.io/e/manifest.json">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



</head>

<body>


<br>

<h3 class="textocentro cor">Alterar Foto de Perfil</h3>


<div class="text-center">
    <img id="alt_borda_perfil" border-style="inset" width="300" height="320" src="c1.jpg">
</div>

<br>



<br>
<form action="alteraFoto.php" method="POST" enctype="multipart/form-data">
<div class="d-flex justify-content-center btn_foto">
  <button class="btn_foto_perfil">Alterar Foto</button>
  <input id="foto_perfil" type="file" name="myfile" />
  <br>
  <br>
  <br>
  <button type="submit" class="btn btn-success">SALVAR FOTO</button>
</div>

<br>
</form>


<br>





















    <script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script asyc src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script async src="js/main.js"></script>




</body>

</html>