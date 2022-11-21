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
    <img class="img-fluid" src="../img/banners/ban-terror.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Grandes Clássicos da Literatura</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/terror/it.jpg" class="img-fluid rounded-start" alt="..." width="1100px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">It - A Coisa</h5>
                <p>Um grupo de crianças se une para investigar o misterioso desaparecimento de vários jovens em sua cidade. Eles descobrem que o culpado é Pennywise, um palhaço cruel que se alimenta de seus medos e cuja violência teve origem há vários séculos.</p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/terror/cor.png" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Coraline</h5>
                <p>Enquanto explora sua nova casa à noite, a pequena Coraline descobre uma porta secreta que contém um mundo parecido com o dela, porém melhor em muitas maneiras. Todos têm botões no lugar dos olhos, os pais são carinhosos e os sonhos de Coraline viram realidade por lá. Ela se encanta com essa descoberta, mas logo percebe que segredos estranhos estão em ação: uma outra mãe e o resto de sua família tentam mantê-la eternamente nesse mundo paralelo.</p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/terror/ovil.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">O Vilarejo</h5>
                <p>O Vilarejo narra a história de um pequeno povoado abandonado e diariamente maltratado pela fome, frio e solidão. Dentro dessa pequena vila, os mais assustadores acontecimentos se desenrolam a partir das respostas que os moradores encontram para a sua condição.</p>
              </div>
            </div>
          </div>
        </div>
  
        <img class="zombie" src="../img/icones/terror/zombie.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="terror.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="terror.php">1</a></li>
            <li class="page-item"><a class="page-link" href="terror2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="terror3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="terror2.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-ter">
          <br><br><br><br><br><br><br><br>    
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>