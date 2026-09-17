<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Desabafos</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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
</head>


<body>


<div class="container d-flex justify-content-center align-items-center h-100">


  <div class="card p-4 col-md-4">


    <h2 class="text-center mb-3">Sistema de Desabafos 💙</h2>


    <p class="text-center">
      Um espaço seguro para você se expressar
    </p>


    <!-- FORMULÁRIO DE LOGIN -->
    <form action="valida_login.php" method="POST">


      <input
        type="text"
        name="usuario"
        class="form-control mb-3"
        placeholder="Usuário"
        required
      >


      <input
        type="password"
        name="senha"
        class="form-control mb-3"
        placeholder="Senha"
        required
      >


      <button class="btn btn-primary w-100">
        Entrar
      </button>


    </form>


    <!-- MENSAGEM DE ERRO -->
    <?php
    if (isset($_GET['login']) && $_GET['login'] == 'erro') {
      echo '<div class="text-danger text-center mt-2">
              Usuário ou senha inválidos
            </div>';
    }
    ?>


  </div>
</div>


</body>
</html>