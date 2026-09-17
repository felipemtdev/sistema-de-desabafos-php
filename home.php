<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


 <style>
    body {
      background:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('imagens/fundo.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      color: white;
    }


    .card {
      background-color: white;
      border-radius: 15px;
      color: #000;
    }
  </style>


<div class="container text-center mt-5">


  <h1>Bem-vindo 💙</h1>


  <!-- IMAGEM -->
  <img
    src="imagens/gatito.png"
    alt="Gatinho acolhedor"
    class="img-fluid mb-4"
    style="max-width: 220px;"
  >


  <h2>Você não está sozinho</h2>


  <a href="escrever_desabafo.php" class="btn btn-primary">
    Escrever Desabafo
  </a>


  <a href="ver_desabafos.php" class="btn btn-light">
    Ver Desabafos
  </a>


  <a href="logout.php" class="btn btn-danger">
    Sair
  </a>


</div>


</body>
</html>