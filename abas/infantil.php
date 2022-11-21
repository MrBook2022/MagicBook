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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Navbar -->
    <?php
      include "navbar.php";
    ?>

    <!-- Banner -->
    <img src="../img/banners/img4.png" class="img-fluid" alt="crianças">

    <!-- Livros -->
  
    <div class="fund-inf">
      <h1 class="center"><tt>Sucessos Para Toda Familia</tt></h1>
      <br><hr><br>
      <div class="card mb-3" style="max-width: 710px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/om-m.png" class="img-fluid rounded-start" alt="..." width="200px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">O Menino Maluquinho</h5>
              <p>Um menininho traquinas, diziam. Tinha macaquinhos no sótão, deitava e rolava, fazendo confusão. Um anjinho, um saci? Alegria da casa, liderava a garotada. Namorador, fazia versinhos, compunha canções, inventava brincadeiras. Era sabido, um amigão. “Menino Maluquinho”, diziam sorrindo as pessoas. Não era, não! Só mais tarde descobriram que tinha sido um garotinho muito amado e, por isso mesmo, muito feliz.</p>
              <s>R$19,99</s>
              <h5>R$9,99</h5>
            </div>
          </div>
        </div>
      </div>
      
      <br><br>
      <div class="card mb-3" style="max-width: 710px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/d-bnn.png" class="img-fluid rounded-start" alt="..." width="250px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Diário De Um Banana</h5>
              <p>Greg Heffley vive no inferno. Ou seja: no sexto ano do ensino fundamental. Franzino. Greg divide os corredores de sua escola com um bando de adolescentes que já se barbeiam. Para fugir destes “malvados” e conseguir um pouco de popularidade.</p>
              <s>R$39,99</s>
              <h5>R$19,99</h5>

            </div>
          </div>
        </div>
      </div>
      
      <br><br>
      <div class="card mb-3" style="max-width: 710px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/j-n.png" class="img-fluid rounded-start" alt="..." width="250px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Jacaré, não!</h5>
              <p>O porco-espinho, a raposa, o burrico, o pelicano e o jacaré estão todos dormindo, muito cansados… Mas a foca está bem acordada. E ela não quer saber de ficar na cama! E agora? O que os outros dorminhocos vão fazer? Este livro, para leitores bem pequenos, torna a hora de dormir um momento mais divertido e gostoso para toda a família.</p>
              <s>R$19,99</s>
              <h5>R$9,99</h5>
            </div>
          </div>
        </div>
      </div>

      <img class="greg" src="../img/icones/greg-inf1.png" alt="">

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="infantil.php">Anterior</a></li>
          <li class="page-item"><a class="page-link" href="infantil.php">1</a></li>
          <li class="page-item"><a class="page-link" href="infantil2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="infantil3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="infantil2.php">Próximo</a></li>
        </ul>
      </nav>
    </div> 
    
    <!-- Fundo -->
    <footer>
        <img src="../img/banners/img5.png" class="img-fluid" alt="">    
    </footer>
</body>
</html>