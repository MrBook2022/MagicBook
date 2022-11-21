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
  <!-- NavBar -->
<?php
  include "navbar.php";
?>

      <!--Carrosel-->
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/banners/img1.png" class="d-block w-100" alt="15% na primeira compra">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/banners/img2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/banners/img3.png" class="d-block w-100" alt="...">
          </div>
          
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--Mais vendidos-->
      <div class="center">
        <h1>Mais Vendidos</h1>
      </div>
      
      <br><br><br>
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <div class="col">
            <div class="card caplivro">
              <img src="img/capaslivros/pequenoprincipe.png" class="card-img-top" alt="...">
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
              <img src="img/capaslivros/terror/ovil.jpg" class="card-img-top" alt="...">
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
              <img src="img/capaslivros/fantasia/osenhordosaneis.jpg" class="card-img-top" alt="...">
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
              <img src="img/capaslivros/misterio/domquixote.jpg" class="card-img-top" alt="...">
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
      <hr>
      <!--Populares-->
      <div class="center">
        <br>
        <h1>Populares</h1>
      </div>
      
      <br><br><br>
      
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <div class="col">
            <div class="card caplivro">
              <img src="img/capaslivros/pequenoprincipe.png" class="card-img-top" alt="...">
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
              <img src="img/capaslivros/romance/c-e-e-a-v/1.jpg" class="card-img-top" alt="...">
              <div class="card-body coplivros">
                <h5 class="card-title">Como eu era antes de você</h5>
                <span>Jojo Moyes</span>
                <p class="card-text tamanho">R$ 23,90</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card caplivro">
              <img src="img/capaslivros/fantasia/osenhordosaneis.jpg" class="card-img-top" alt="...">
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
              <img src="img/capaslivros/misterio/domquixote.jpg" class="card-img-top" alt="...">
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
      <br><br>
      <!--Categorias-->
      <div class="center" id="categorias">
        <h1>Categorias</h1>
      </div>      
      <br><br><br>
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-md-5">
          <div class="col">
            <a href="abas/terror.php" class="cate"><img src="img/icones/terror.png" alt="Terror" width="120px"><br><h2>Terror</h2></a>
          </div>
          <div class="col">
            <a href="abas/infantil.php" class="cate"><img src="img/icones/infantil.png" alt="Infantil" width="120px"><br><h2 class="p-2">Infantil</h2></a>
            </div>
          <div class="col">
            <a href="abas/romance.php" class="cate"><img src="img/icones/romance.svg" alt="Romance" width="120px"><br><h2>Romance</h2></a>
          </div>
          <div class="col">
            <a href="abas/fantasia.php" class="cate"><img src="img/icones/Dragão.png" alt="Fantasia" width="120px"><br><h2>Fantasia</h2></a>
          </div>
          <div class="col">
            <a href="abas/misterio.php" class="cate"><img src="img/icones/misterio.png" width="120px"><br><h2>Misterio</h2></a>
          </div>
        </div>
      </div>
      <hr>
      <!-- Roda pé -->
      <footer>
        <div class="center">©Copyright 2022 MagicBooks</div>
        <br><br><br>
      </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>