<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Books</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Css local -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
    <!-- Navbar -->
    <?php
      include "navbar.php";
    ?>

    <div class="card mb-3 perf" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
        <img src="../img/icones/perfilb.png" alt="" width="80%">
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <?php
            echo " Nome: $nome; <br><br> Email: $email; <br><br> Senha: *******  <br><br> Data de Nascimento: $nasc <br><br>  Sexo: $sexo"
          ?>
          </div>
        </div>
      </div>
    </div>
    
    <img src="../img/banners/study.png" class="img-fluid" alt="...">

          <!--Mais vendidos-->
          <div class="center">
        <h1>Mais Vendidos</h1>
      </div>
      
      <br><br><br>
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <div class="col">
            <div class="card caplivro">
              <img src="../img/capaslivros/pequenoprincipe.png" class="card-img-top" alt="...">
              <div class="card-body coplivros">
                <h5 class="card-title">O Pequeno Príncipe</h5>
                <span>A. Saint-Exupéry</span>
                <p class="card-text tamanho">R$ 23,90</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card caplivro">
              <img src="../img/capaslivros/terror/ovil.jpg" class="card-img-top" alt="...">
              <div class="card-body coplivros">
                <h5 class="card-title">O vilarejo</h5>
                <span>Raphael Montes</span>
                <p class="card-text tamanho">R$ 23,90</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card caplivro">
              <img src="../img/capaslivros/fantasia/osenhordosaneis.jpg" class="card-img-top" alt="...">
              <div class="card-body coplivros">
                <h5 class="card-title">O Senhor dos Anéis Parte I</h5>
                <span>J. R. R. Tolkien</span>
                <p class="card-text tamanho">R$ 23,90</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card caplivro">
              <img src="../img/capaslivros/misterio/domquixote.jpg" class="card-img-top" alt="...">
              <div class="card-body coplivros">
                <h5 class="card-title">Dom Quixote De La Mancha</h5>
                <span>Miguel de Cervantes</span>
                <p class="card-text tamanho">R$ 23,90</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
        <!-- Roda pé -->
      <footer>
        <div class="center">©Copyright 2022 MagicBooks</div>
        <br><br><br>
      </footer>
    


</body>
</html>