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
    <img class="img-fluid" src="../img/banners/ban-fantasia.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Grandes Clássicos da Literatura</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/fantasia/duna.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Duna</h5>
                <p>Uma estonteante mistura de aventura e misticismo, ecologia e política, este romance ganhador dos prêmios Hugo e Nebula deu início a uma das mais épicas histórias de toda a ficção científica. Duna é um triunfo da imaginação, que influenciará a literatura para sempre.Esta edição inédita, com introdução de Neil Gaiman, apresenta ao leitor o universo fantástico criado por Herbert e que será adaptado ao cinema por Denis Villeneuve, diretor de A chegada e de Blade Runner 2049.</p>
                <h5>R$29,99</h5>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/fantasia/vento.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">O nome do vento </h5>
                <p>Da infância numa trupe de artistas itinerantes, passando pelos anos vividos numa cidade hostil e pelo esforço para ingressar na escola de magia, O nome do vento acompanha a trajetória de Kote e as duas forças que movem sua vida: o desejo de aprender o mistério por trás da arte de nomear as coisas e a necessidade de reunir informações sobre o Chandriano – os lendários demônios que assassinaram sua família no passado. </p>
                <h5>R$29,99</h5>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/fantasia/prin.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">                <h5 class="card-title">As crônicas de Nárnia - Príncipe Caspian </h5>
                <p>Tempos difíceis abateram-se sobre a terra encantada de Nárnia. Os dias de paz e liberdade, em que os animais, anões, árvores e flores viviam em absoluta paz e harmonia, estavam terminados. O Príncipe Caspian, herdeiro legítimo do trono, decide trazer de volta o glorioso passado de Nárnia.</p>
                <h5>R$29,99</h5>
              </div>
            </div>
          </div>
        </div>
  
        <img class="zombie" src="../img/icones/terror/zombie.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="fantasia.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="fantasia.php">1</a></li>
            <li class="page-item"><a class="page-link" href="fantasia2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="fantasia3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="fantasia3.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-fan">
          <br><br><br><br><br><br>   
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>