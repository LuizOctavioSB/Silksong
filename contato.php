<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="stylesheet" href="Estilo/header.css">
    <link rel="stylesheet" href="Estilo/footer.css">
    <link rel="icon" href="Midias/logo.svg">
    <title>Silksong</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>

  <body id="bodyContato">
    <?php
    include "php/header.php";
    ?>
    <main>
      <?php
      include "PHP/modal.php";
      ?>
      <form action="Index.php" method="get" id="formContato">
        <label>Motivo do contato:</label>
        <div id="listaContato">
          <input type="text" id="motivo" class="input" name="motivo" required placeholder="Assunto">
          <textarea id="msg" class="input" name="msg" placeholder="Mensagem" required></textarea>
          <input type="file" name="Mnsagem do aluno" id="msgAluno">
          <button><a>Enviar</a></button>
        </div>
      </form>
    </main>
    <?php
    include "php/footer.php";
    ?>
    <script src="Script/valida.js"></script>
  </body>

</html>