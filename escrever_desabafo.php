<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Escrever Desabafo</title>


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


<div class="container">


  <h2>Escreva seu desabafo 💙</h2>


  <!-- IMAGEM -->
  <img
    src="imagens/caderno.png"
    alt="Gatinho acolhedor"
    class="img-fluid mb-4"
    style="max-width: 220px;"
  >


  <form action="salvar_desabafo.php" method="POST">


    <input
      type="text"
      name="titulo"
      class="form-control mb-3"
      placeholder="Título do desabafo"
    >


    <textarea
      name="descricao"
      class="form-control mb-3"
      rows="5"
      placeholder="O que você está sentindo?"
    ></textarea>


    <button type="submit" class="btn btn-primary">
      Enviar Desabafo
    </button>


  </form>


</div>


</body>
</html>
