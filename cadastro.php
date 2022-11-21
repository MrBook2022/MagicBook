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

    <div class="cadastro">
        <div class="container">
          <div class="alert alert-danger" id="valisenha" role="alert">
                As senhas não conferem
              </div>
            <form action="incluusu.php" method="post" onsubmit="return valsenha()">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
                <div class="col">
                    <label for="nome" class="form-label text-start">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" required>
                  </div>
                <div class="col">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha" required>
                </div>
                <div class="col">
                    <label for="senhaconf" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" name="senhaconf" id="senhaconf" required>
                </div>
                <div class="col">
                  <label for="ano">Data de Nascimento</label>
                  <input type="date" name="ano" class="form-control" id="ano">
                </div>
                <div class="col">
                  <label for="sexo">Sexo</label>
                  <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="M" value="Masculino" checked>
                        <label class="form-check-label" for="M">Masculino</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="F" value="Feminino">
                        <label class="form-check-label" for="F">Feminino</label>
                      </div>
                </div>
                <div class="col">
                  <br>
                  <input type="submit" class="btn btn-primary" value="Cadastrar">
                </div>
              </div>
            </form>
          </div>
        <!-- <form>
            <div class="row">
              <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3 col">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
              </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Mostrar Senha</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form> -->

        </div>

        <div class="d-grid gap-2 login-but mx-auto">
            <a class="btn btn-primary" href="login_cadastro.php">Voltar para o login</a>
        </div>
        <script>
          function valsenha() {
          let senha = document.getElementById('senha').value;
          let senhaconf = document.getElementById('senhaconf').value;
          let valisenha = document.getElementById('valisenha');

          if (senha != senhaconf) {
              valisenha.style.display = "block";
              return false
          }
        }
        </script>
    </body>
    </html>