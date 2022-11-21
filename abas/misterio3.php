<DOCTYPE html>
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
    <img class="img-fluid" src="../img/banners/ban-misterio.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Grandes Clássicos da Literatura</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/misterio/a-m.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Areia Movediça</h5>
                <p>A vida de Maja parecia incrível: ela era jovem, bonita, inteligente e popular. Nada iria dar errado. Até que houve o tiroteio na escola: seu namorado e sua melhor amiga estão mortos e ela é a única acusada dos crimes. Após nove meses na prisão, é hora do julgamento. Os advogados estão usando todos os recursos possíveis para provar sua inocência, mas a promotoria, a mídia e os olhares de todos à sua volta nitidamente desejam o oposto. Toda história tem mais de um lado. Em qual deles você vai acreditar?</p>
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
              <img src="../img/capaslivros/misterio/expresso.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Assassinato no Expresso do Orientes</h5>
                <p> Pouco tempo após a meia-noite, o excesso de neve nos trilhos obriga o trem a parar. Na manhã seguinte, o corpo de um dos passageiros é encontrado, golpeado por múltiplas facadas. Com os passageiros isolados por conta da neve, e tendo um assassino entre eles, a única solução é que Poirot inicie uma investigação para descobrir quem é o criminoso ― antes que se faça mais uma vítima. </p>
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
              <img src="../img/capaslivros/misterio/a-p-s.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">A paciente silenciosa</h5>
                <p> Após cometer o assassinado de seu marido, uma mulher se recusa a falar qualquer coisa, deixando suspeitas e mistérios não resolvidos sobre o caso. E o terapeuta Theo Faber está obcecado em descobrir o motivo da violencia e do silencio. Só ela sabe o que aconteceu. Só ele pode fazê-la falar. A paciente silenciosa é um daqueles livros que não saem da cabeça do leitor, quer ele queira, quer não.</p>
                <s>R$19,99</s>
              <h5>R$9,99</h5>
              </div>
            </div>
          </div>
        </div>
  
        <img class="zombie" src="img/icones/terror/zombie.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="misterio2.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="misterio.php">1</a></li>
            <li class="page-item"><a class="page-link" href="misterio2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="misterio3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="misterio3.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-mis">
          <br><br><br><br><br><br><br><br>    
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>