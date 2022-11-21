<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Books</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Css Ofline -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br>
    <div class="center logo">
        <a href="index.php"><img src="img/icones/magic books.svg" alt="logo" width="60px"></a>
        <a class="navbar-brand text-dark p-3" href="index.php">Magic Books</a>
    </div>



    <div class="login">
      <!-- vALIDAÇÃO -->
      <?php
        include "valida.php";
      ?>

        <form method="post" action="#">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="checkbox" onclick="mostrar()">
              <label class="form-check-label" for="checkbox">Mostrar Senha</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>

        </div>

        <div class="d-grid gap-2 login-but mx-auto">
            <a class="btn btn-primary" href="cadastro.php">Criar sua conta</a>
        </div>

        <script>
          function mostrar() {
          let senha = document.getElementById("senha");
          let checkbox = document.getElementById("checkbox");
          if (checkbox.checked) {
              senha.type = "text"
          }
          else {
              senha.type = "password"
          }
}
        </script>
    </body>
    </html>